<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userable extends Model
{
    use HasFactory;
 
    protected $fillable = [
     'user_id',
    'userable_id',
    'userable_type', 
    ];
   
}
