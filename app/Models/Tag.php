<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }

################ many to many morph#################

    public function lecturers()
    {
        return $this->morphedByMany(Lecturer::class, 'taggable');
    }
    public function courses()
    {
        return $this->morphedByMany(Course::class, 'taggable');
    }

################ many to many morph#################

}

