Setup

```shell
cp .env.example .env
composer install
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```
