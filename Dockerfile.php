FROM php:8.1-fpm as prod 
ENV HACKERAPP_STAGE=prod
LABEL "com.hackerapp.stage"="prod"
FROM php:8.1-fpm as dev
ENV HACKERAPP_STAGE=dev
LABEL "com.hackerapp.stage"="dev"