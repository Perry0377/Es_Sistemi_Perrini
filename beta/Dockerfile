FROM php:7.0-apache

RUN usermod -u 33 www-data
RUN mkdir -p /var/www/html/users
RUN chmod -R 777 /var/www/html/users

#RUN mkdir /var/www/html/users
#RUN chown www-data:www-data
#RUN chmod -R 777 /var/www/html/users

COPY index.html /var/www/html/index.html
COPY register.html /var/www/html/register.html
COPY login.php /var/www/html/login.php
COPY register.php /var/www/html/register.php
COPY users/users.json /var/www/html/users/users.json
RUN chmod 777 /var/www/html/users/users.json
EXPOSE 80