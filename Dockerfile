FROM php:7.4-apache

# Instala extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita o módulo rewrite do Apache
RUN a2enmod rewrite

# Copia os arquivos do projeto para o container
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html/

EXPOSE 80