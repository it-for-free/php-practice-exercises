FROM php:8.5-fpm-alpine3.22

# ставим зависимости для сборки расширений (как в ktu-articles)
RUN apk --no-cache update \
    && apk add --no-cache autoconf g++ make linux-headers

# xdebug собираем из тарболла с xdebug.org -
# вариант с install-php-extensions подвисает на скачивании с github
RUN wget -q https://xdebug.org/files/xdebug-3.5.3.tgz -O /tmp/xdebug.tgz \
    && cd /tmp && tar xfz xdebug.tgz && cd xdebug-3.5.3 \
    && phpize && ./configure && make -j$(nproc) && make install \
    && rm -rf /tmp/xdebug*

WORKDIR /var/www/project
