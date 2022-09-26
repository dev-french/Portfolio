# Portfolio-project
## My first Portfolio project

**I decided to create a portfolio website
the site will be composed of :**

- A back end developed with PHP stack and the Laravel framework which will be structured in MVC architecture.
Several dependencies will be used as Composer, JSON etc..
For the DB part I want to create my own API.

- Then a front end part developed with JavaScript HTML5 & CSS3.


**My goals :**

1) A back end and a front end that communicate easily via HTTP requests & Endpoint.

2) Set up a professional and intuitive user interface (UI design).

3) Respect the good practices and standards in the code. 

4) A full responsive web design project.

5) Implement a minimum of security in the site code (SQL-injections, CSRF etc..)

-------------------------------------------------------------------------------


```
composer create-project laravel/laravel nomDuProjet
```

```
composer install
```

```php
`php -S 0.0.0.0:8080 -t public` ou php artisan serve
```
----

Dans Laravel la syntaxe des liens src & href s’écrit comme ceci :

```php
{{url(’directory/file’)}}
```

exemple :

```php
<link rel="stylesheet" href="{{url('css/main.css')}}" />
```

Pour inclure un template dans un fichier sur Laravel 8 il faut utiliser la syntaxe suivante:

```php
@include(’directory.file’)
```

### Syntaxe pour les liens des images ( pour les versions ultérieurs à Laravel 5.7 )

```<img src = "{{ asset('/images/image_name.png') }}" />```

**Liens vers la doc du Framework :**
https://laravel.com/docs/8.x/blade#layouts-using-components

