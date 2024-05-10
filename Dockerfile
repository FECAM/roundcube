#FROM roundcube/roundcubemail:1.6.x-fpm
FROM roundcube/roundcubemail:1.6.6-apache
ADD config.docker.fecam.inc.php /usr/src/roundcubemail/config/
ADD folder_info /usr/src/roundcubemail/plugins/folder_info/
ADD ispconfig3_account /usr/src/roundcubemail/plugins/ispconfig3_account/
ADD ispconfig3_pass /usr/src/roundcubemail/plugins/ispconfig3_pass/

COPY docker-entrypoint.sh /docker-entrypoint.sh
COPY logo.svg /usr/src/roundcubemail/skins/elastic/images/logo.svg
COPY logo.png /usr/src/roundcubemail/skins/elastic/images/favicon.ico
COPY php8.2-soap_8.2.18-1~deb12u1_mipsel.deb /php8.2-soap_8.2.18-1~deb12u1_mipsel.deb

RUN set -ex; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
    wget ;\
#        git dovecot-core wget expect\
    composer \
        --working-dir=/usr/src/roundcubemail/ \
        --prefer-dist \
        --prefer-stable \
        --update-no-dev \
        --no-interaction \
        --optimize-autoloader \
        require \
            johndoh/contextmenu \
    ; \
    rm -rf /var/lib/apt/lists/*
    
#COPY  install-pear.sh /install-pear.sh
#RUN	  expect -f "/install-pear.sh"  
RUN   wget -O /tmp/go-pear.phar http://pear.php.net/go-pear.phar
RUN   php /tmp/go-pear.phar 
#RUN	  adduser www-data ssl-cert && \
#        chmod g+r  /etc/ssl -R && \
#        echo "auth_mechanisms = cram-md5" >>  /etc/dovecot/conf.d/10-auth.conf && \
#        chgrp ssl-cert /etc/dovecot/private -R && \
#        chmod g+rx /etc/dovecot/private -R && \
 RUN       pear install Net_Sieve-1.4.6
        
    