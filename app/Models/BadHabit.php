<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadHabit extends Model
{
    use HasFactory;

    static $rules = [
        'title' => 'required',
    ];

    protected $perPage = 20;

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientBadHabits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClientBadHabit::class, 'bad_habit_id', 'id');
    }

}
