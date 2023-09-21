composer install
php artisan key:generate
php artisan migrate
php artusan db:seed --class=BarangSeeder
php artisan db:seed --class=UserSeeder
