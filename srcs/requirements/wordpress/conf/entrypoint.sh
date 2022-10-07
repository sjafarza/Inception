#!/bin/sh

sleep 5
#=== https://www.dreamhost.com/wordpress/guide-to-wp-cli/
#                               raw.githubusercontent.com/${user}/${repo}/${branch}/${path}

curl				-O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod				+x wp-cli.phar
mv					-f wp-cli.phar /usr/local/bin/wp

/usr/local/bin/wp	--info
/usr/local/bin/wp	core download --allow-root --path="/var/www/html"

# rm					-f /var/www/html/wp-config.php
# cp					./wp-config.php /var/www/html/wp-config.php

wp core config --dbname=${MARIADB_DATABASE} --dbuser=${MARIADB_USER} --dbpass=${MARIADB_PASSWORD} --dbhost=${WORDPRESS_MARIADB_HOST} --path=/var/www/html
wp config set WP_SITEURL 'https://saray.42.fr'
wp config set WP_HOME 'https://saray.42.fr'

/usr/local/bin/wp	core install \
					--allow-root \
					--path="/var/www/html" \
					--url=${WORDPRESS_HOST} \
					--title=${WORDPRESS_TITLE} \
					--admin_user=${WORDPRESS_ADMIN_USER} \
					--admin_password=${WORDPRESS_ADMIN_PASSWORD} \
					--admin_email=${WORDPRESS_ADMIN_EMAIL} \
					--skip-email

/usr/local/bin/wp	user create \
					--allow-root \
					--path="/var/www/html" \
					${WORDPRESS_USER} \
					${WORDPRESS_EMAIL} \
					--role=author \
					--user_pass=${WORDPRESS_PASSWORD}

chown -R www-data:www-data /var/www/html/*
sed -i "s|listen = /run/php/php7-fpm.sock|listen = 9000|g" /etc/php7/php-fpm.conf

exec	php-fpm7 -F