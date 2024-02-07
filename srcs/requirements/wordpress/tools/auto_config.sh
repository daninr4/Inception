#!/bin/sh

# Wait for 10 seconds to be sure that the database is created
sleep 10

# change the www.conf file
cat /www.conf > /etc/php8/php-fpm.d/www.conf

# Download wp-cli and move it
cd /var/www/html && curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar 
mv /var/www/html/wp-cli.phar /usr/local/bin/wp

# mv wp_config file
mv /wp-config.php /var/www/html/wp-config.php
chmod +x /usr/local/bin/wp

# Install WordPress using wp-cli && change info
wp core download --allow-root
sed -i -r "s/mdb42/$SQL_DATABASE/1" wp-config.php
sed -i -r "s/lnaidu/$SQL_USER/1" wp-config.php
sed -i -r "s/passwd/$SQL_PASSWORD/1" wp-config.php

# Check if the directory /run/php doesn't exist, then create it
if [ ! -d /run/php ]; then
    mkdir /run/php
fi

# Start PHP-FPM 8 in the background
/usr/sbin/php-fpm8 -F