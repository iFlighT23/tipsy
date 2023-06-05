<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class step extends Model
{
    use HasFactory;
    protected $fillable = ['id_recipe', 'id_ingredient', 'step_number', 'step_desc', 'dose', 'status'];

    public function ingredient()
    {
        return $this->hasMany(Ingredient::class);
    }
}
