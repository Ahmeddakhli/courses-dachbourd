<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
      
    'course_id',
    'id',
    'correct_answer',
    'question',
    '1',
    '2',
    '3',

    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
