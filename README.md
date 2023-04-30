# Шаблон для контейнеризации приложения на php

⚠️  Не подходит для production среды!

## Упаковка в контейнер и отправка в Docker Hub

```bash
docker build . --no-cache
docker commit -m "Change image" -a "Jumas Cola" <container id> jumascola/k8s_php:0.0.<version>
```

## Открыть сервис в браузере

```bash
minikube service k8s-php-service
```
