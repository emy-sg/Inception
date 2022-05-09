service mysql start

mariadb -e "create database wordpress;"

mariadb -e "grant all privileges on wordpress.* to 'emy'@'localhost' identified by 'emypassword';"

mariadb -e "flush privileges;"

