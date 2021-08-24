<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

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
        'email',
        'password',
        'image',
        'type'
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


    public function getPathImageAttribute()
    {
        if ($this->image){
            if (is_null($this->attributes['image'])) {
                x:return asset('assets/placeholder.png');
            }

            if (stripos($this->attributes['image'], 'http') === 0) {
                return $this->attributes['image'];
            }
        if (Storage::disk('uploads')->exists(asset('assets/admin/img/',true)))
            goto x;

            return asset('assets/admin/img/' . $this->attributes['image']);
        }
        goto x;
    }
    public function isAdmin(){
        return $this->type =='admin';
    }
    public function isSuperAdmin(){
        return $this->type =='super_admin';
    }


}
