## Docker describe

DockerFile
FROM php:8.4-fpm -> tutaj wskazujemy z jakiego obrazu korzystamy
RUN docker-php-ext-install pdo pdo_mysql -> tutaj dodatkowa akcja czyli instalacja pdo [w wyjściowym obrazie tego nie ma]

