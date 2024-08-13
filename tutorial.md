# Laravel Livewire

#Laravel/Livewire #Laravel/Folio #Laravel/Volt

* [Livewire](https://livewire.laravel.com/) -  is a full-stack framework for Laravel that allows you to build dynamic UI components without leaving PHP.
* [Volt](https://livewire.laravel.com/docs/volt) - is functional API for Livewire that supports single-file components, allowing a component's PHP logic and Blade templates to coexist in the same file.
* [Folio](https://laravel.com/docs/11.x/folio) -  is a powerful **page based router** designed to simplify routing in Laravel applications. (run pages without routes)


## **Install Livewire**
```
composer require livewire/livewire
```

## **SearchBar** 
```
php artisan make:livewire SearchBar
```

## **Install npm**
```
npm install
npm run dev
```

## **Install boostrap**
```
npm i --save-dev bootstrap @popperjs/core sass
```

### **Create resources/scss/app.scss**
```
mkdir resources/scss
touch resources/scss/app.scss
```

```
// Import all of Bootstrap's CSS
@import "bootstrap/scss/bootstrap";
```

## **Create Model Todo with migration**
```
php artisan make:model Todo -m
```

## **Debugging Laravel**
### **Installation of telescope**
```
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
```
Usage: Access Telescope via ``/telescope`` in your application. It provides a detailed history of actions within your application.

### **Installation of laravel-debugbar**
```
composer require barryvdh/laravel-debugbar --dev
```

## **Livewire essentials**
### **Livewire Components**
Create components 
```
php artisan make:livewire UserSearch
php artisan make:livewire users-list
php artisan make:livewire auth.navigation
```

### **Livewire properties**
````
public $todos = [];
public $todo = '';
public function  mount()
{
    //fetch todos from db
    $this->todos = ['First todo', 'Second todo'];
}
````

### **Livewire methods**
````
public function addTodo()
{
    //save todo in db
    $this->todos[] = $this->todo;

    $this->reset('todo'); //reset the property 
}
````

### **Livewire Event Listeners**
````
wire:click  - Triggered when element is clicked
wire:submit - Triggered when a form is submitted
wire:keydown- Triggered when key is pressed down
wire:keyup  - Triggered when key is released
wire:mouseenter     - Triggered when mouse enters elements
wire:*      - Whatever text follows wire: will be used as event 
````

## **Livewire Volt**

```
composer require livewire/volt
php artisan volt:install
```

### **Livewire volt components**
```
php artisan make:volt volt-component
```

## **Livewire Folio**
For example, to create a page that is accessible at the **/greeting** URL, just create a ``greeting.blade.php`` file in your application's ``resources/views/pages`` directory:

```
composer require livewire/folio
php artisan folio:install
```

### **create folio**
```
php artisan make:folio MyProfile
php artisan make:folio Folder/index
```

### **check folio routes**
```
php artisan folio:list
```

- - -


## Laravel Valet
#Laravel/Valet  #ngrok 
[Valet](https://github.com/laravel/valet)<!-- {"preview":"true"} --> [The PHP Framework For Web Artisans](https://laravel.com/docs/11.x/valet)<!-- {"preview":"true"} -->

Valet is a Laravel development environment for Mac minimalists. No Vagrant, no ``/etc/hosts`` file.

## Installation
```
brew update
brew install php
```

**Install composer now** 
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

**Install Laravel Valet as global Composer package**
```
composer global require laravel/valet
valet install
```

~[DBngin](https://dbngin.com/)~ Database management Tool can be used.   #database/dbngin

## Serving Sites
#### The ``park`` Command
The park command registers a directory on your machine that contains your applications. 
```
cd ~/Sites
valet park
```

#### To check parked directories
```
cat ~/.config/valet/config.json
#OR 
ls ~/.config/valet/Nginx/
```

#### To check logs
```
ls ~/.config/valet/Log/
```

#### The ``link`` Command
The link command can also be used to serve your Laravel applications
```
cd ~/Sites/laravel
valet link
# OR
valet link laravel-host-name
```

#### Display all links
```
valet links
```

#### Unlink site
```
cd ~/Sites/laravel
valet unlink 
```

#### Securing sites with TLS
Serve a site over encrypted TLS using HTTP/2
```
valet secure laravel-host-name
```

#### Unsecure sites
```
valet unsecure laravel-host-name
```

#### Commands to proxy calls to the appropriate PHP CLI or tool based
```
valet php
valet composer
valet which-php
```

### Troubleshoot Valet
Check status
```
valet status
```

Restart valet
```
valet restart
```

Reinstall valet
```
valet install
```


### Sharing site using Ngrok
Update your Valet configuration using the share-tool command, specifying either ``ngrok`` or ``expose``:
```
valet share-tool ngrok

cd ~/Sites/laravel
 
valet share

```

To stop sharing your site, you may press ``Control + C``.
Also, can define region. For more read [ngrok documentation](https://ngrok.com/docs)

```
valet share --region=eu
```




