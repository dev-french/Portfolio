# Portfolio-project
## My first Portfolio project

**I decided to create a portfolio website
the site will be composed of :**

- A back end developed with the Laravel framework which will be structured in MVC architecture.
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

# Etapes du projet (ordre chronologique)
-----
2 ) Maintenant pour crée le modèle MCD de ma BDD je dois me poser les questions suivantes :

- Quelles infos je dois stocker ?
    
    _ Nom & Prénom
    
    _ Email
    
    _ Téléphone
    
    _ Message
    
- Sur quoi je dois faire un CRUD (c'est ce qui me donnera mes entités)
    
    _ 
    
- Comment ces infos sont liées entre elles ? (ça me donnera mes relations)
 
    _

Ensuite je me rends sur http://mocodo.wingi.net pour renseigner les entités, associations, attributs, identifiants, cardinalités de ma BDD



---
**Installation de Composer, Laravel & des dépendances.**

Laravel utilise Composer pour gérer ses dépendances. Donc, avant d'utiliser Laravel, je m'assure que Composer est installé sur ma machine. 

**1 )** Création du projet et installation de Laravel via une commande dans le terminal :
```
composer create-project laravel/laravel nomDuProjet
```
Ensuite entrer la commande suivante pour mettre à jour nos dépendances :
```
composer update
```
----------------
Je me connecte sur le serveur [localhost](http://localhost) de PHP en tapant la commande suivant :

```php
`php -S 0.0.0.0:8080 -t public`
```
----
Puis je me rend sur mon navigateur et tape dans ma barre d’url :

<aside>
💡  localhost:8080
</aside>

 
----
**2 )** Je me connecte sur Adminer pour crée ma DataBase.

Ensuite je crée un fichier .env à la racine de mon projet dans lequel je colle le contenu de .env.example et modifie les données pour relier ma nouvelle DB au projet

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=root
```
----
**3 )** Maintenant nous allons crée notre première route "/" en GET.

Dans le dossier **app → Http → Controllers** je crée un fichier MainController avec la méthode home qui fera un echo d'une chaine de caractères sur ma page " / " pour etre sur que notre route et belle est bien crée :

```
<?php

namespace App\Http\Controllers;

class MainController extends Controller {

    /**
     * HTTP Method : GET
     * URL : /
     */
    public function home()
    {
        echo "je suis la page home";
    }
}
```
----
**4 )** Dans le ficher web.php dans le dossier routes je crée ma route ‘/’ de méthode GET et je n’oublie pas le use pour “connecté” mon Controller à ma route :
```
// Je déclare un route de méthode GET
Route::get(
    // URL de la route
    '/',
    [
        // Le nom complet du controller
        MainController::class,
        // le nom de la méthode
        'home'
    ]);
```
J’actualise mon navigateur et l’affichage de notre echo prouve que notre route à bien était crée ! :D

---------
**5 )** Maintenant que mon environnement de travail et mes outils sont prêt je peut :

 ```git add . / git commit -m "install composer and Laravel framework" / git push``` 

Je me crée une branch via la commande ```git checkout -b routes&API``` sur laquel je vais pouvoir commencer à configurer mon API REST CRUD & coder mes Controllers, Models, Routes etc ...

----

# Erreur de parcours -_-

Une fois mon environnement de développement prêt avec tout les outils d'installé et ma branch crée je me dis **Oups !**

**STOP**



Comment va être organisé mon site ? 

Ok des Routes, Models ou des Controllers mais pour afficher quoi ? Sur quel page ?


Quel va être le modèle MCD de ma BDD ou de mon API ? 


Je me rends compte que je n'est pas pensé à tout ça et c'est mal ! 
Je vais devoir prendre un papier et mettre mes idées au clair, faire un semblant de maquette du site (wireframe) pour pouvoir rédiger mes users-story et mieux comprendre les fonctionnalitées que je souhaite développer. Puis pour les données de ma BDD ou mon API faire le modèle MCD avec une belle illustration via Mocodo.

A few moment later...

-------

