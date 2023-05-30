FROM bref/arm-build-php-82:2 AS ext

RUN MAKEFLAGS="-j $(nproc)" pecl install -f grpc-1.55.0
RUN cp `php-config --extension-dir`/grpc.so /tmp/grpc.so
RUN strip --strip-debug /tmp/grpc.so
RUN echo 'extension=grpc.so' > /tmp/ext.ini

# Build the final image with just the files we need
# FROM scratch

# Copy things we installed to the final image
#COPY --from=ext /tmp/grpc.so /opt/bref/extensions/grpc.so
#COPY --from=ext /tmp/ext.ini /opt/bref/etc/php/conf.d/ext-grpc.ini
RUN mkdir /opt/bref/extensions
RUN mkdir -p /opt/bref/etc/php/conf.d/
RUN cp /tmp/grpc.so /opt/bref/extensions/grpc.so
RUN cp /tmp/ext.ini /opt/bref/etc/php/conf.d/ext-grpc.ini
RUN mkdir -p /tmp/php

COPY ./my_handler.php .

