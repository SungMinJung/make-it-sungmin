FROM haneu89/apm:laravel

WORKDIR /app

COPY . ./

RUN composer install --optimize-autoloader

RUN php artisan storage:link

RUN chown -R www-data:www-data /app
