<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'title',
        'body' ,
        'lecturer_id',
        'course_id',
        'created_at',
    ];
        
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
