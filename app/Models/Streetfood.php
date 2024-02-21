<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streetfood extends Model
{
    use HasFactory;
    protected $fillable = [


        'image',
        'title',
        'description',
        'date',
        'ingredients',
        'procedure',
        ];
        
        
        protected $table = 'Streetfood';
        
        protected $primaryKey = 'id';
}
