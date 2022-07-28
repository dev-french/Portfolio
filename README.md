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
 
# Etapes du projet (ordre chronologique)
-----
1 ) Pour crée le modèle MCD de ma BDD je dois me poser les questions suivantes :

- Quelles infos je dois stocker ?
    
- Sur quoi je dois faire un CRUD (c'est ce qui me donnera mes entités)
    
- Comment ces infos sont liées entre elles ? (ça me donnera mes relations)
 

Ensuite je me rends sur http://mocodo.wingi.net pour renseigner les entités, associations, attributs, identifiants, cardinalités de ma BDD.

Dans mon cas le MCD est très simple, il se compose d'une seule entitée CONTACT

![image](https://user-images.githubusercontent.com/104022785/181497450-68016dca-8acd-455a-a8f9-effefaab3b90.png)


---
**Installation de Composer, Laravel & des dépendances.**

Laravel utilise Composer pour gérer ses dépendances. Donc, avant d'utiliser Laravel, je m'assure que Composer est installé sur ma machine. 

**4 )** Création du projet et installation de Laravel via une commande dans le terminal :
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
**5 )** Je me connecte sur Adminer pour crée ma DataBase.

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
----
**6 )** Maintenant nous allons crée notre première route "/" en GET.

Dans le dossier **app → Http → Controllers** je crée un fichier MainController avec la méthode home qui fera un echo d'une chaine de caractères sur ma page " / " pour etre sur que notre route et belle est bien crée :

![image](https://user-images.githubusercontent.com/104022785/181299939-8fd6ded2-34f5-4ef0-8c60-fa6549732b51.png)


----
**7 )** Dans le ficher web.php dans le dossier routes je crée ma route ‘/’ de méthode GET et je n’oublie pas le use pour “connecté” mon Controller à ma route :

![image](https://user-images.githubusercontent.com/104022785/181300069-b1d1a86d-bf37-42f8-833f-01e2e93074e8.png)


J’actualise mon navigateur et l’affichage de notre echo prouve que notre route à bien était crée ! :D
![image](https://user-images.githubusercontent.com/104022785/181300552-ee8f2357-ee0a-4d94-bb8a-3a395747d143.png)


---------
**8 )** Maintenant que mon environnement de travail et mes outils sont prêt je peut :

 ```git add . / git commit -m "install composer and Laravel framework" / git push``` 

Je me crée une branch via la commande ```git checkout -b routes&API``` sur laquel je vais pouvoir commencer à configurer mon API REST CRUD & coder mes Controllers, Models, Routes etc ...

----

# Mes Questions

un repo front & un repo back ? ou tout en 1 ?

Insomnia sera il utile sur ce projet ?

Se renseigner sur Docker ?

Créé mon wireframes et mes users - story ?


A few moment later...

-------

