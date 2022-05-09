FROM debian:buster

RUN apt-get update && \
	apt-get upgrade -y

#1- Install Nginx
#RUN apt install -y nginx

#COPY default /

#RUN mv default /etc/nginx/sites-enabled/


#2- Install and Configure Mysql DB
##RUN apt install -y mariadb-server

#RUN chown -R mysql:mysql /var/lib/mysql

#RUN service mysql start

#RUN mariadb -e "create database wordpress;"

#RUN mariadb -e "grant all privileges on wordpress.* to 'emy'%'localhost' identified by 'emypassword';"

#RUN mariadb -e "flush privileges;"

# ==> We need to run those CLI into a script or we get this error:
#	Can't Connect To Local MySQL Server Through Socket
#		/var/run/Mysqld/Mysqld.Sock
#

##COPY mariadb.sh /

##RUN chmod +x mariadb.sh && \
##	./mariadb.sh 

# mariadb> create database WORDPRESS_DB;
# ==> Create new user and grant privileges to this user on the new database:
# - With local access (connections originating from the same host):
# mariadb> grant all privileges on WORDPRESS_DB.* TO 'EMY'@'localhost' identified by 'PASSWORD'; 
# - With remote access (connections originating from the outside host):
# mariadb> grant all privileges on WORDPRESS_DB.* TO 'EMY'@'%' identified by 'PASSWORD';

# To execute the following command in order to apply the changes, are:
# mariadb> flush privileges;

# To prompt the list of the users in a MySQL database:
# mariadb> SELECT User FROM mysql.user;

# This commands provide more info about mysql.db:
# mariadb> SELECT User, Db, Host from mysql.db;

#3- Install PHP
#RUN apt install -y php7.3 php7.3-cli php7.3-common

# Nginx (web-server) does not support processing of PHP files by default.
# So, we need to install the PHP package on the web server to support PHP files, by using the PHP FastCGI Process Manager to handle PHP requests.
RUN apt install -y php7.3-fpm
# ==> Once you have installed FastCGI manager, add the socket details in Nginx config file (/etc/nginx/sites-enabled/default)

# Installing PHP MySQL extension will let your PHP code to connect with the MYSQL database.
RUN apt install -y php7.3-mysql

# To change the php-fpm (fastCGI) to work with TCP Socket instead of Unix Socket:
# ==> COPY www.conf /etc/php/7.3/fpm/pool.d
RUN sed -i 's+listen = /run/php/php7.3-fpm.sock+listen=0.0.0.0:9000+' /etc/php/7.3/fpm/pool.d/www.conf

# PHP extensions for WordPress:
#RUN apt install -y php7.3-mysql php7.3-dom php7.3-simplexml php7.3-ssh2 php7.3-xml php7.3-xmlreader php7.3-curl  php7.3-exif  php7.3-ftp php7.3-gd  php7.3-iconv php7.3-imagick php7.3-json  php7.3-mbstring php7.3-posix php7.3-sockets php7.3-tokenizer

#4- Install WordPress
RUN apt-get install -y wget unzip

RUN apt-get install -y vim

RUN wget https://wordpress.org/latest.zip

RUN unzip latest.zip

RUN mkdir -p /var/www/html

RUN mv wordpress /var/www/html/

#RUN chown -R www-data:www-data /var/www/html/wordpress

COPY wp-config.php /var/www/html/wordpress

#RUN cp /var/www/html/wordpress/wp-config-sample.php  /var/www/html/wordpress/wp-config.php  

#RUN sed -i  's/database_name_here/$WORDPRESS_DB_NAME/' /var/www/html/wordpress/wp-config.php  
#RUN sed -i  's/username_here/$WORDPRESS_DB_USER/' /var/www/html/wordpress/wp-config.php  
#RUN sed -i  's/password_here/$WORDPRESS_DB_USER/' /var/www/html/wordpress/wp-config.php  
#RUN sed -i  's/localhost/$WORDPRESS_DB_HOST/' /var/www/html/wordpress/wp-config.php  

# https://pixelspress.com/how-to-install-php-fpm-on-ubuntu/
# $ php-fpm7.3 --help

# ERROR: Unable to create the PID file (/run/php/php7.3-fpm.pid).: No such file or directory (2)
# ERROR: FPM initialization failed

# ==> to solve this problem :https://stackoverflow.com/questions/45540492/cannot-start-php-because-it-is-unable-to-create-pid-file
# It means that directory /var/run/php-fpm/ does not exist.
# You should add this directory to the tmpfiles.d configuration.
# ==> In our case: 
# 	$ mkdir -p /run/php

RUN mkdir -p /run/php


CMD ["php-fpm7.3", "-F", "-R"]

#COPY script.sh .

#CMD ["bash", "./script.sh"]
