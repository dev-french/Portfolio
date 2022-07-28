<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// On pense de suite à faire un CoreModel
//? Eloquent vient avec son CoreModel
class Category extends Model
{
    // La seule règle : nom du Model au singulier => nom de la Table au pluriel
    // Eloquant va automatiquement trouverla table correspondant à notre Model
    // Category => categories

    // Si jamais ça ne correpond pas
    // on peut préciser à Eloquent le nom de la table avec la propriété $table
    // protected $table;

    // Deuxième effet Kisskool
    // nos propriétés sont Automatiquement déduites par Eloquent.
    // Il va les trouver dans la table.
    //? nos propriétés auront le nom de nos colonnes

    /**
     * Ceci est la relation OneToMany vers task
     * avec ça Eloquent sera capable de faire des jointures entre nos tables
     * ! il ne le fera pas de lui même : Eager Loading
     *
     * @link https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
     **/
}
