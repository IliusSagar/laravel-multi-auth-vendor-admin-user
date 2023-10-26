composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate 
npm install 
npm run dev

css problem issues:
composer require laravel/breeze:1.9.4
php artisan breeze:install
npm install 
npm run dev
npm install autoprefixer@10.4.5 --save-exact
npm run dev
----------------------------------------------
2014_10_12_000000_create_users_table.php** 
-----------------------------------------
php artisan migrate:fresh
--------------------------------------
php artisan make:seeder UserSeeder
-------------------------------------------------
seeders/UserSeeder.php**
----------------------------------------------
seeders/DatabaseSeeder.php*
----------------------------------------------
php artisan db:seed 
--------------------------------------------------
resources/views/admin/dashboard.blade.php** 
resources/views/vendor/dashboard.blade.php** 
---------------------------------------------------
php artisan make:controller Backend/AdminController
php artisan make:controller Backend/VendorController
-----------------------------------------------------
routes/web.php** 
---------------------------------------------------
AdminController.php**
VendorController.php** 
-----------------------------------------------------
php artisan make:middleware RoleMiddleware
-------------------------------------------------
Kernel.php** 
-------------------------------------------------------
Middleware/RoleMiddleware.php** 
-------------------------------------------------------
Http/Controllers/Auth/AuthenticatedSessionController.php** 
--------------------------------------------------------
routes/admin.php** 
-----------------------------------------------------
routes/vendor.php** 
-----------------------------------------------------
Providers/RouteServiceProvider.php** 
-------------------------------------------------------
php artisan route:list 
--------------------------------------------------------------
views/admin/auth/login.blade.php** 
----------------------------------------------------------
------------------------------------------------------------










