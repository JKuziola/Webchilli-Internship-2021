# GCC support can be specified at major, minor, or micro version
# (e.g. 8, 8.2 or 8.2.0).
# See https://hub.docker.com/r/library/gcc/ for all supported GCC
# tags from Docker Hub.
# See https://docs.docker.com/samples/library/gcc/ for more on how to use this image
# FROM gcc:latest

# # These commands copy your files into the specified directory in the image
# # and set that as the working location
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp

# # This command compiles your app using GCC, adjust for your source code
# RUN g++ -o myapp main.cpp
# FROM php:7.1-apache
# COPY apache2.conf /etc/apache2
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# FROM php:apache
#FROM httpd
#RUN apt-get update -y
#RUN apt-get install -y git wget tree
#RUN apt install apt-transport-https lsb-release ca-certificates wget -y &&\
#    wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg &&\ 
#    sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list' &&\
#    apt update &&\
#    apt install php8.0-cli php8.0-common php8.0-mysql php8.0-redis -y
FROM pensiero/apache-php-mysql
RUN apt update
#RUN apt upgrade
RUN  apt-get install wget
RUN apt install sudo -y
RUN sudo apt-get install php-xml -y
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && mv composer.phar /usr/local/bin/composer
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony
EXPOSE 80
