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

**Installation de Composer, Laravel & des dépendances.**
----

Laravel utilise Composer pour gérer ses dépendances. Donc, avant d'utiliser Laravel, je m'assure que Composer est installé sur ma machine. 

Création du projet et installation de Laravel via une commande dans le terminal :
```
composer create-project laravel/laravel nomDuProjet
```
Ensuite entrer la commande suivante pour mettre à jour nos dépendances :
```
composer update
```
----------------
Je me connecte sur le serveur [localhost](http://localhost) de PHP ou Laravel en tapant la commande suivant :

```php
`php -S 0.0.0.0:8080 -t public` ou php artisan serve
```
----
Puis je me rend sur mon navigateur et tape dans ma barre d’url :

<aside>
💡  localhost:8080 ou 127.0.0.1:8000
</aside>

----

Maintenant que mon environnement de travail et mes outils sont prêt je peut :

 ```git add . / git commit -m "install composer and Laravel framework" / git push``` 

Je me crée une branch via la commande ```git checkout -b routes&API``` sur laquel je vais pouvoir commencer à configurer mon API REST CRUD & coder mes Controllers, Models, Routes etc ...

----

# Etapes du projet (ordre chronologique)
-----

**1 )** Première étape la conception de mon wireframes  (en_cours)

-----

**2 )** Je commence par la rédaction de mes user_stories, elles contiennent toutes les informations nécessaires au développement des différentes fonctionnalités de mon site.

![image](https://user-images.githubusercontent.com/104022785/181569614-537c9ca4-1bfe-4f99-8ae1-2f89ee507643.png)


----
**3 )** Création du MCD, pour le créer je dois me poser les questions suivantes :

- Quelles infos je dois stocker ?
    
- Sur quoi je dois faire un CRUD (c'est ce qui me donnera mes entités)
    
- Comment ces infos sont liées entre elles ? (ça me donnera mes relations)
 

Ensuite je me rends sur http://mocodo.wingi.net pour renseigner les entités, associations, attributs, identifiants, cardinalités de ma BDD.

Dans mon cas le MCD est très simple, il se compose d'une seule entitée CONTACT

![image](https://user-images.githubusercontent.com/104022785/181497450-68016dca-8acd-455a-a8f9-effefaab3b90.png)

Une fois mon MCD fini je commence à rédiger mon Dictionnaire de données

![image](https://user-images.githubusercontent.com/104022785/181504943-90207141-4da4-475a-84aa-3d645ac257e1.png)

----
**4 )** Je me connecte sur Adminer pour crée ma DataBase.

![image](https://user-images.githubusercontent.com/104022785/181300186-0bc67c29-adce-484d-89e0-732f4907fafa.png)


Ensuite je crée un fichier .env à la racine de mon projet dans lequel je colle le contenu de .env.example et modifie les données pour relier ma nouvelle DB au projet

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=root
```

Maintenant sur Adminer dans ma BDD “portfolio” que je viens de crée je vais traduire mon dictionnaire de données (créer les tables, les champs, etc..)

![image](https://user-images.githubusercontent.com/104022785/181509261-4d7e95c2-ad4f-47c4-966a-679c3ffea3de.png)
 
----

# Intégrer un template sur son  projet avec Laravel 8

**1 )** Placer le fichier index.html à la racine du dossier views qui se trouve dans le dossier ressources

**2 )** Placer vos dossier css img js etc… dans le dossier public  de votre projet 

![image](https://user-images.githubusercontent.com/104022785/182322286-a384d10e-7b3b-4554-b781-a9b5309907b2.png)


**3 )** A la racine du dossier views crée un fichier layout.blade.php dans lequel vous le collez le contenu de index.html puis (une fois fini supprimer index.html & welcome.blade.php) .

**4 )** Dans le dossier routes → web.php mettre le nom de la view a renvoyé

![image](https://user-images.githubusercontent.com/104022785/182321746-66217eff-b28b-47fd-841b-33ec3d025dbf.png)


**5 )** Je divise le code de mes templates en fichiers puis je crée un dossier Partials & Utils dans lequel vont se trouver les différents templates 

![image](https://user-images.githubusercontent.com/104022785/182321775-f4ed0e37-d0c2-4624-a18e-e8d7015f6f80.png)


# Syntaxe de Laravel 8 🤓

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

----

**5 )** Maintenant nous allons crée notre première route principale "/" en GET.

Dans le dossier **app → Http → Controllers** je crée un fichier MainController avec la méthode home qui fera un echo d'une chaine de caractères sur ma page " / " pour etre sur que notre route et belle est bien crée :

![image](https://user-images.githubusercontent.com/104022785/181299939-8fd6ded2-34f5-4ef0-8c60-fa6549732b51.png)


----
**6 )** Dans le ficher web.php dans le dossier routes je crée ma route ‘/’ de méthode GET et je n’oublie pas le use pour “connecté” mon Controller à ma route :

![image](https://user-images.githubusercontent.com/104022785/181300069-b1d1a86d-bf37-42f8-833f-01e2e93074e8.png)


J’actualise mon navigateur et l’affichage de notre echo prouve que notre route à bien était crée ! :D
![image](https://user-images.githubusercontent.com/104022785/181300552-ee8f2357-ee0a-4d94-bb8a-3a395747d143.png)


---------


