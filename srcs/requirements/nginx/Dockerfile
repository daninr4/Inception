# Install debian buster
FROM	debian:buster

# Install all nginx and openssl package
RUN		apt -y update && apt install nginx -y && apt install openssl -y
RUN		apt install vim -y && apt install curl -y

# Create nginx's configuration folder for connection security
RUN		mkdir -p /etc/nginx/ssl && mkdir -p /var/run/nginx

# Generate TSL certificate
RUN		openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=FR/ST=PACA/L=NICE/O=42/OU=42/CN=lnaidu.42.fr/UID=lnaidu"

# Create && Attribute rights to nginx's html configuration folder
RUN		mkdir -p /var/www/html					
RUN		chmod 777 /var/www/html
RUN		chown -R www-data:www-data /var/www/html

# Copy nginx's configuration file
COPY	/conf/nginx.conf /etc/nginx/nginx.conf

# listenning port
EXPOSE	443

# Run nginx
CMD		[ "nginx", "-g", "daemon off;" ]