<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilipinoDesserts extends Model
{
     protected $fillable = [


'image',
'title',
'description',
'date',
'ingredients',
'procedure',
];


protected $table = 'filipino_desserts';

protected $primaryKey = 'id';
}
