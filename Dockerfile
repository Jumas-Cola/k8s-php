FROM composer AS composer

# copying the source directory and install the dependencies with composer
COPY ./app/ /app

# run composer install to install the dependencies
RUN composer install \
  --optimize-autoloader \
  --no-interaction \
  --no-progress

RUN /app/vendor/bin/phpunit tests/*

# continue stage build with the desired image and copy the source including the
# dependencies downloaded by composer
FROM trafex/php-nginx
COPY --chown=nginx --from=composer /app /var/www/html

USER root

# install php extensions
RUN apk --no-cache --update add \
    php-tokenizer \
    php-xmlwriter \
    php-xml

USER nobody

WORKDIR /var/www/html

EXPOSE 8080
