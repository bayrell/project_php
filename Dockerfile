ARG ARCH=
FROM bayrell/alpine_php_fpm:8.3-20251227${ARCH}

RUN sudo apk update && sudo apk add inotify-tools && sudo composer global require baylang/compiler && sudo ln -s /root/.composer/vendor/bin/baylang-php /usr/bin/baylang-php && sudo rm -rf /root/.composer/cache && sudo apk cache clean

ADD files /
ADD src /var/www/html