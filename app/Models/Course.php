<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img',
        'vedio_link',
        'discreption',
        'sex',
       'description',
       'lecturer_id',
        'course_payment',
        'course_mony',
        'certificate_title',
        'certificate_from',
        'certificate_payment',
        'certificate_mony',
        'wellcome_massage',
        'approve',
        'approve_massage',
        'start_at',
    ];
    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
       /**
     * Get the comments for the course.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    public function massages()
    {
        return $this->hasMany(Massage::class);
    }
    public function test()
    {
        return $this->hasOne(Test::class);
    }
}
