<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }



 
}

