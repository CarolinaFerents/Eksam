<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Element;

class Image extends Model
{
    use HasFactory;
    public function burger()
    {
        return $this->belongsTo(Burger::class);
    }
}
