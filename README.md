# Portfolio-project
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

