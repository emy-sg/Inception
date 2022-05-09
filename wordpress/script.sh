#! bin/sh
sed -i  's/database_name_here/$WORDPRESS_DB_NAME/' /var/www/html/wordpress/wp-config.php  
sed -i  's/username_here/$WORDPRESS_DB_USER/' /var/www/html/wordpress/wp-config.php  
sed -i  's/password_here/$WORDPRESS_DB_PASSWORD/' /var/www/html/wordpress/wp-config.php  
sed -i  's/localhost/$WORDPRESS_DB_HOST/' /var/www/html/wordpress/wp-config.php

php-fpm7.3 -F -R
