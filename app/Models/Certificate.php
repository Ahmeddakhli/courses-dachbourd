<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'score',
        'user_id',
        'course_id',
        'id',
        'approve',
    ];
    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }

}
