<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // // Appends
    // protected $appends = ['full_name', 'test'];

    // public function getFullNameAttribute($value){
    //     return $this->first_name.' '.$this->last_name;
    // }
    // public function getTestAttribute($value){
    //     return 'testing atr'; 
    // }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [   
        'password',
        'remember_token',
    ];

    // protected $visible = [
    //     'name',
    //     'email',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function userDetail(){
        return $this->hasOne(Task::class);
    }

    public function tasks(){
        return $this->belongsToMany(Task::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
