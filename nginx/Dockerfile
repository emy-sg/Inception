FROM debian:buster

EXPOSE 443

RUN apt-get update && \
	apt-get upgrade -y

RUN apt-get install nginx -y

RUN apt-get install vim -y

#RUN apt-get install openssl -y

#RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt

#COPY nginx.key /

#RUN mv nginx.key etc/ssl/private/nginx.key

COPY nginx.key /etc/ssl/private/nginx.key

#COPY nginx.crt /

#RUN mv nginx.crt /etc/ssl/certs/nginx.crt

COPY nginx.crt /etc/ssl/certs/nginx.crt


# Change in /etc/nginx/sites-enabled/default file
COPY default /

RUN mv /default /etc/nginx/sites-enabled


# TLSv1.2 in /etc/nginx/nginx.conf
# Modifying Files : sed -ibackup 's/str1/str2/' file
RUN sed -i 's/ssl_protocols TLSv1 TLSv1.1 TLSv1.2;/ssl_protocols TLSv1.2;/' /etc/nginx/nginx.conf

# add This domaine name login.42.fr to point to your local IP address
# ==> 127.0.0.1 isghioua.42.fr >> /etc/hosts

COPY hosts /etc/hosts 

CMD ["nginx", "-g", "daemon off;"]
