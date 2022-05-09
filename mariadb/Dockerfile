FROM debian:buster

RUN apt-get update && \
	apt-get upgrade -y

RUN apt-get install -y mariadb-server

#
RUN sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY wordpress.sql /

COPY script.sh /

#RUN chmod +x script.sh && \
#	./script.sh

#CMD ["mysqld_safe"]

CMD ["bash", "./script.sh"]
