#FROM roundcube/roundcubemail:1.6.x-fpm
FROM roundcube/roundcubemail:1.6.10-apache
ADD config.docker.fecam.inc.php /usr/src/roundcubemail/config/
ADD folder_info /usr/src/roundcubemail/plugins/folder_info/
ADD ispconfig3_account /usr/src/roundcubemail/plugins/ispconfig3_account/
ADD ispconfig3_pass /usr/src/roundcubemail/plugins/ispconfig3_pass/

COPY docker-entrypoint.sh /docker-entrypoint.sh
COPY logo.svg /usr/src/roundcubemail/skins/elastic/images/logo.svg
COPY logo.png /usr/src/roundcubemail/skins/elastic/images/favicon.ico
COPY login.html /usr/src/roundcubemail/skins/elastic/templates/login.html

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

COPY  apache2.conf /etc/apache2/apache2.conf
COPY  mods-available/status.conf /etc/apache2/mods-available/status.conf
COPY  mods-available/mpm_prefork.conf /etc/apache2/mods-available/mpm_prefork.conf
RUN   wget -O /tmp/go-pear.phar http://pear.php.net/go-pear.phar
RUN   php /tmp/go-pear.phar 
RUN       pear install Net_Sieve-1.4.6
#RUN       pear install --alldeps horde/Horde_ManageSieve
RUN curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions soap

    