FROM test-app-app-prod:hot as app

FROM nginx:stable-alpine
WORKDIR /usr/share/nginx/html/
COPY --from=app /app .
COPY ./docker-configs/nginx/nginx.conf /etc/nginx/conf.d/default.conf:ro
