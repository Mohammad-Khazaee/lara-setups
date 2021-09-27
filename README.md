# Lara setups
<a href="https://packagist.org/packages/mohammadkhazaee/larasetups"><img src="https://img.shields.io/packagist/dt/mohammadkhazaee/larasetups" alt="Total Downloads"></a>
## Introduction

lara setups helps you to install latest bootstrap and vue.js version on your laravel project 

laravel team no longer supports laravel ui package so lara setups is a very good replacemanet for laravel ui and it help you to install any version of vue js and it has no limitted for you

### Installation


```bash
// locally
composer require mohammadkhazaee/larasetups --dev

// root
composer require mohammadkhazaee/larasetups 
```
### bootstrap & vue scaffolding
Once the `larasetups` package has been installed, you may install the frontend scaffolding using the `install:` Artisan command:

```bash
// bootstrap 5 & vue 3
php artisan install:bv3

// bootstrap 5 & vue 2
php artisan install:bv2

// bootstrap 5 
php artisan install:bootstrap5

// vuejs 3 & 2
php artisan install:vue3
php artisan install:vue2
```

once it done run
```bash

npm install

npm run dev

```

#### use default vue component

##### for vue 2
```bash

<div id="app">
    <example-component></example-component>
</div>

```
##### for vue 3
```bash

<div id"example"><div>

```
