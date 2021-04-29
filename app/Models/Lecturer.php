<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lecturer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'username',
        'country',
        'sex',
        'position',
        'work_at',
        'cv_link',
        'cv_text',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    ############### one to many morph ###########
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function massages()
    {
        return $this->hasMany(Massage::class);
    }
    protected $table = 'lecturers';
    protected $guarded = array();
}
