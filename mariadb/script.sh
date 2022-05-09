# if you find the wordpress directory in the /var/lib/mysql/wordpress
# which means that the database already exist
# if not import data, using this command:
#	mysql -u root -p wodpress < wordpress.sql
# PS: you should have the wordpress.sql file (you must export it first to a file), by this command:


if ! test -f "/var/lib/mysql/wordpress"; 

then 

service mysql start

mariadb -h localhost -u root -e "create database wordpress;"

mariadb -h localhost -u root -e "grant all privileges on wordpress.* to 'emy'@'%' identified by 'emypassword';"

#mariadb -h localhost -u root -e "alter user 'root'@'localhost' identified by 'rootpassword';"

mariadb -h localhost -u root -e "flush privileges;"

mysql -u root -prootpassword wordpress < wordpress.sql

fi
# The "mysqldump" console utility exports databases to SQL text files.
#myslqdump -u root -p wordpress > wordpress.sql



mysqld_safe
