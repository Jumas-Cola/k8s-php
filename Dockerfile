FROM trafex/php-nginx

COPY ./app/. /var/www/html

WORKDIR /var/www/html

EXPOSE 8080
