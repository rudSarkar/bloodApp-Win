<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'blood_group',  'division', 'district', 'upazila', 'mobile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function division()
    {
        return $this->belongsTo(Division::class);
    }*/

    public function getDivName()
    {
        return Division::where('id', $this->division)->first()->name;
    }
    public function getDisName()
    {
        return District::where('id', $this->district)->first()->name;
    }
    public function getUpaName()
    {
        return Upazila::where('id', $this->upazila)->first()->name;
    }
}
