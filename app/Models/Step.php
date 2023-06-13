<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class step extends Model
{
    use HasFactory;
    protected $fillable = ['recipe_id', 'ingredient_id', 'step_number', 'step_desc', 'dose', 'status'];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }
    
}
