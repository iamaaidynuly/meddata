<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_role_id',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static $rules = [
        'name' => 'required',
        'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Survey::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userRole(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserRole::class, 'id', 'user_role_id');
    }
}
