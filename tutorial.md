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

## Debugging Laravel
### Intallation of telescope
``
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
``
Usage: Access Telescope via `/telescope` in your application. It provides a detailed history of actions within your application.

### Installation of laravel-debugbar
``
composer require barryvdh/laravel-debugbar --dev
``

## Livewire essentials
### Livewire Components
Create components 
``
php artisan make:livewire UserSearch
php artisan make:livewire users-list
php artisan make:livewire auth.navigation
``

### Livewire properties
```
public $todos = [];
public $todo = '';
public function  mount()
{
    //fetch todos from db
    $this->todos = ['First todo', 'Second todo'];
}
```

### Livewire methods
```
public function addTodo()
{
    //save todo in db
    $this->todos[] = $this->todo;

    $this->reset('todo'); //reset the property 
}
```

### Livewire Event Listeners
```
wire:click  - Triggered when element is clicked
wire:submit - Triggered when a form is submitted
wire:keydown- Triggered when key is pressed down
wire:keyup  - Triggered when key is released
wire:mouseenter     - Triggered when mouse enters elements
wire:*      - Whatever text follows wire: will be used as event 
```

## Livewire Volt

``
composer require livewire/volt
php artisan volt:install
``

### Livewire volt components
``
php artisan make:volt volt-component
``

## Livewire Folio

``
composer require livewire/folio
php artisan folio:install
``

### create folio
``
php artisan make:folio MyProfile
php artisan make:folio Folder/index
``

### check folio routes
``
php artisan folio:list
``
