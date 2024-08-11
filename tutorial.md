<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Install Livewire
``
composer require livewire/livewire
``

## SearchBar 
``
php artisan make:livewire SearchBar
``

## Install npm
``
npm install
npm run dev
``

## Install boostrap
``
npm i --save-dev bootstrap @popperjs/core sass
``

### Create resources/scss/app.scss
``
mkdir resources/scss
touch resources/scss/app.scss
``

```
// Import all of Bootstrap's CSS
@import "bootstrap/scss/bootstrap";
```

## Create Model Todo with migration
``
php artisan make:model Todo -m
``

