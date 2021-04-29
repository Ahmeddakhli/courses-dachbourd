<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        
        'email',
        'password',
        'phone',
        
        'country',
        'sex',
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
################ many to many morph#################
    public function tags()
    {
        return $this->morphedByMany(Tag::class, 'userable');
    }
    public function courses()
    {
        return $this->morphedByMany(Course::class, 'userable');
    }
    public function lessons()
    {
        return $this->morphedByMany(Lesson::class, 'userable');
    }
    public function tests()
    {
        return $this->morphedByMany(Test::class, 'userable');
    }
    public function certificates()
    {
        return $this->morphedByMany(Certificate::class, 'userable');
    }
################end many to many morph#################


 ############### one to many morph ###########
 public function comments()
 {
     return $this->morphMany(Comment::class, 'commentable');
 }
  ############### end one to many morph ###########

  public function orders()
    {
        return $this->hasMany(Order::class);
    }
 public function scores()
 {
     return $this->hasMany(Score::class);
 }
}
