# Шаблон для контейнеризации приложения на php

⚠️ Не подходит для production среды!

## Запуск для разработки

```bash
docker compose -f docker-compose.dev.yml up -d
```

## Упаковка в контейнер и отправка в Docker Hub

```bash
docker compose -f docker-compose.build.yml build --no-cache
docker compose -f docker-compose.build.yml up -d
docker ps
docker commit -m "Change base image" -a "Jumas Cola" <container id> jumascola/k8s_php:0.0.<version>
docker push jumascola/k8s_php:0.0.<version>
```

## Запуск

```bash
minikube start
kubectl apply -f deployment.yml -f service.yml
```

## Открыть сервис в браузере

```bash
minikube service k8s-php-service
```

## Остановка и удаление

```bash
kubectl delete deploy k8s-php-deployment
```
