FROM	alpine:3.14

RUN		apk update
RUN		apk upgrade

#==== NGINX ===================================================================#
RUN		apk add nginx

RUN		mkdir -p /var/www/html/

COPY	conf/default.conf /etc/nginx/http.d/default.conf

#==== OPENSSL =================================================================#
# https://www.digicert.com/kb/ssl-support/openssl-quick-reference-guide.htm #

RUN		apk add openssl
RUN		mkdir -p /etc/nginx/ssl

RUN		openssl req \
		-newkey rsa:4096 \
		-nodes \
		-keyout /etc/nginx/ssl/localhost.key \
		-out /etc/nginx/ssl/localhost.csr \
		-subj "/C=FR/ST=ILSDEFRANCE/L=PARIS/O=42/OU=IT/CN=localhost" \
		-x509 \
		-sha256 \
		-days 365 		

#==== OPENRC ==================================================================#
RUN		apk add openrc
RUN		rc-update add nginx default

#==============================================================================#
EXPOSE	443
CMD		["nginx", "-g", "daemon off;"]