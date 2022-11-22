<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientLifestyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'bad_habit_id',
        'client_id',
    ];

    public $timestamps = false;

}
