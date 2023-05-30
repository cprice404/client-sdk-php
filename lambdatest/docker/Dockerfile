#FROM bref/arm-php-82:2 AS ext
FROM bref/arm-build-php-82:2 AS build

RUN MAKEFLAGS="-j $(nproc)" pecl install -f grpc-1.55.0
RUN cp `php-config --extension-dir`/grpc.so /tmp/grpc.so
RUN strip --strip-debug /tmp/grpc.so
RUN echo 'extension=grpc.so' > /tmp/ext.ini

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /my-app
COPY ./my_handler.php /my-app
RUN composer require bref/bref

# Build the final image with just the files we need
# FROM scratch
FROM bref/arm-php-82:2

# Copy things we installed to the final image
COPY --from=build /tmp/grpc.so /opt/bref/extensions/grpc.so
COPY --from=build /tmp/ext.ini /opt/bref/etc/php/conf.d/ext-grpc.ini

COPY --from=build /my-app/ /var/task

CMD [ "my_handler.php" ]
