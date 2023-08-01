<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status','url'];

    public function themes(): BelongsToMany
    {
        return $this->belongsToMany(Theme::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    // pour préciser que la table steps est une table pivot qui fait la relation avec table recette et ingrédient

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class, 'steps');
    }

}


