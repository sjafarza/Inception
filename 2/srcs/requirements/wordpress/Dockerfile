FROM	alpine:3.15

ARG WORDPRESS_DB_NAME
ARG WORDPRESS_DB_USER
ARG WORDPRESS_DB_PASSWORD
ARG WORDPRESS_DB_HOST
ARG DOMAIN_NAME

RUN	echo  1111111111111111111111-Doc-WP
RUN		apk update --no-cache && \
        apk add php php7-fpm php7-mysqli \
	    php7-json php7-phar php7-iconv php7-mbstring mariadb-client 
RUN	echo  222222222222222222222222-Doc-WP
RUN		sed -i 's/listen = 127\.0\.0\.1:9000/listen = 9000/g' /etc/php7/php-fpm.d/www.conf


#COPY	conf/wp-config.sh ./
#COPY	conf/wp-config.php ./

COPY	conf/wp-config.sh /usr/local/bin/
COPY	conf/wp-config.php /usr/local/bin/

#RUN		chmod +x 				./wp-config.sh
RUN		chmod +x 				/usr/local/bin/wp-config.sh

RUN		echo  3333333333333333333333333-Doc-WP
RUN		export MYSQL_DATABASE=${MYSQL_DATABASE} && \
		export WORDPRESS_DB_USER=${WORDPRESS_DB_USER} && \
		export WORDPRESS_DB_PASSWORD=${WORDPRESS_DB_PASSWORD} && \
		export DB_HOST=${DB_HOST} && \
		export DOMAIN_NAME=${DOMAIN_NAME}

RUN		echo  444444444444444444444444444444-Doc-WP
RUN		sed -i "s/env_MYSQL_DATABASE/$WORDPRESS_DB_NAME/" /usr/local/bin/wp-config.php && \
		sed -i "s/env_WORDPRESS_DB_USER/$WORDPRESS_DB_USER/" /usr/local/bin/wp-config.php && \
		sed -i "s/env_WORDPRESS_DB_PASSWORD/$WORDPRESS_DB_PASSWORD/" /usr/local/bin/wp-config.php && \
		sed -i "s/env_DOMAIN_NAME/$DOMAIN_NAME/" /usr/local/bin/wp-config.php && \
		sed -i "s/env_WORDPRESS_DB_HOST/$WORDPRESS_DB_HOST/" /usr/local/bin/wp-config.php

EXPOSE	9000

RUN		echo  5555555555555555555555-Doc-WP


COPY	./conf/wp-config.sh	./
RUN		chmod +x 				./wp-config.sh
ENTRYPOINT						["./wp-config.sh"]

#ENTRYPOINT ["wp-config.sh"]
RUN	echo  77777777777777777777777è-Doc-WP

#CMD bash /wp-config.sh
CMD ["php-fpm7", "-F"]