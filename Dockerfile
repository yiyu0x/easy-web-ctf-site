FROM ubuntu

RUN apt-get update -y && apt-get install git apache2 mysql-server
RUN cd /home/
RUN git clone https://github.com/yiyu0x/LSA_web_security.git

CMD ['cp -r /home/LSA_web_security/* /var/www/html/']
ENTRYPOINT ["/etc/init.d/apache2", "start"]

# docker run -p 5555:80 lsa-ctf
