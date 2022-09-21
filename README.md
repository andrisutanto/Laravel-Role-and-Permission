# laravel-role
Laravel Role and Permission

1. Buat Laravel Project
composer create-project laravel/laravel=^9.1 laravel-role

2. Install Breeze
- composer require laravel/breeze --dev
- php artisan breeze:install
- php artisan migrate

3. Install Spatie
- composer require spatie/laravel-permission
- php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
- php artisan migrate

Cara Penggunakan Spatie:
https://spatie.be/docs/laravel-permission/v5/basic-usage/basic-usage

tambahkan, 
use Spatie\Permission\Traits\HasRoles;
dan use HasRoles
pada bagian model

4. Buat Seeder Role, User, dan Permission
- php artisan make:seeder UserRolePermissionSeeder

kemudian sesuaikan datanya, referensi lihat file: database/seeders/UserRolePermissionSeeder.php
dan DatabaseSeeder.php

- php artisan db:seed

(Untuk fresh migrate)
php artisan migrate:fresh --seed

5. Route, Controller, and Blade (Role & Permission)
- php artisan make:controller RoleController -r

untuk membatasi akses, bisa dari controller atau dari routes

Ref lihat di:
- Routes->web.php
- app->Http->controller->RoleController.php
- Views->roles->index.blade.php

6. Unit Test
Buat unit test 
- php artisan make:test RoleTest

Untuk testing: php artisan test --filter CanShowRolePage
atau kalau ada lebih dari 1 test, bisa panggil nama classnya dgn:
php artisan test --filter RoleTest