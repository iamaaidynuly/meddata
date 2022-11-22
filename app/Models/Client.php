<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $login
 * @property string|null $birthday
 * @property string $gender
 * @property int|null $city_id
 * @property string|null $image
 * @property string $contact
 * @property string|null $app
 * @property string|null $height
 * @property string|null $age
 * @property string|null $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereWeight($value)
 * @mixin \Eloquent
 */
class Client extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    const TYPE_GET_WELL = 'getwell';
    const TYPE_WELLIT = 'wellit';

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    static $rules = [
        'gender' => 'required',
        'contact' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','login','birthday','gender','city_id','image','contact','app','height','age','weight'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientMedicalDatas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\ClientMedicalDatum', 'client_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Survey', 'client_id', 'id');
    }
}
