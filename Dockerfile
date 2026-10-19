FROM php:8.3-cli
WORKDIR /app
COPY . .
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE $PORT
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} index.php"]
