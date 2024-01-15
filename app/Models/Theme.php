<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status','url','color'];// fillable défini les attributs du model

    public function recipes(): BelongsToMany// relation n,n.
    {
        return $this->belongsToMany(Recipe::class);// $this reprends l'objet courant thème
        //belongstoMany : thème appartient à plusieurs recettes.
    }
}
