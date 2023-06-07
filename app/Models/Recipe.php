<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status'];

    public function themes(): HasMany
    {
 return $this->hasMany(Theme::class);
    }
}


