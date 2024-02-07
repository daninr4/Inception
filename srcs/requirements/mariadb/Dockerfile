# Install debian buster
FROM debian:buster

# Install mariadb
RUN		apt -y update && apt upgrade -y
RUN		apt-get install mariadb-server -y
RUN 	apt-get update -y && apt-cache search mariadb

# Copy configuration file
COPY	conf/mariadb.conf	/etc/mysql/mariadb.conf.d/mariadb.conf
COPY	conf/mariadb.conf	/etc/mysql/my.cnf
COPY 	tools/database.sh /database.sh

# Create configuration folder database and give rights
RUN		mkdir -p /run/mysqld
RUN		mkdir -p /var/lib/mysql				
RUN		chmod 755 /var/lib/mysql
RUN 	chmod 755 /run/mysqld
RUN		chmod +x /database.sh

# listenning port
EXPOSE	3306

# Run from mariadb script
ENTRYPOINT ["./database.sh"]