FROM php:7.1-apache
RUN docker-php-ext-install mysqli pdo_mysql

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt\
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd zip
#ssl
#COPY server.crt /etc/apache2/ssl/server.crt
#COPY server.key /etc/apache2/ssl/server.key
#COPY dev.conf /etc/apache2/sites-enabled/dev.conf

RUN a2enmod rewrite
#RUN a2enmod ssl
#COPY ./ /var/www/html/
# COPY ./fataco/ /var/www/html/
#RUN rm -rf /var/www/html/upload/cache
#RUN mkdir -p /var/www/html/upload/cache
#RUN chmod 777 /var/www/html/upload/cache
#RUN chmod 777 /var/www/html/upload/hinhthem
#RUN chmod 777 /var/www/html/upload/sanpham

# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
# RUN php composer-setup.php
# RUN php -r "unlink('composer-setup.php');"

# RUN mv composer.phar /usr/local/bin/composer
# RUN apt-get update && apt-get -y install git

# RUN cd /var/www/html/
# RUN composer install
