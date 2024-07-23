@echo off

php artisan db:seed --class=MovieProducersSeeder
php artisan db:seed --class=MovieDirectorsSeeder
php artisan db:seed --class=MovieWritersSeeder
php artisan db:seed --class=MovieProductionsStudioSeeder
php artisan db:seed --class=MovieCastsSeeder
php artisan db:seed --class=MoviesSeeder
php artisan db:seed --class=StudiosSeeder