<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'status'];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }
}