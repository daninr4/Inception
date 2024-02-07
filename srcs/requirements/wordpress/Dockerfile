# Install alpine:3.16
FROM alpine:3.16

# Install php and curl to download wordpress
RUN apk update && apk upgrade && apk add curl
RUN apk add php8 \
            php8-mysqli \
            php8-fpm \
            php8-opcache \
            php8-json \
            php8-phar \
            php8-xml \
            php8-mbstring \
            php8-session \
            php8-openssl \
            php8-curl \
            mariadb-client

# Create configuration folder
RUN mkdir -p /var/www 
RUN mkdir -p var/www/html
RUN chown -R root:root /var/www/html

# Copy configuration files and give rights
COPY /conf/wp-config.php /
COPY /conf/www.conf /
COPY /tools/auto_config.sh /
RUN chmod +x /auto_config.sh

# listenning port
EXPOSE 9000

# Run from the script
ENTRYPOINT ["/auto_config.sh"]
