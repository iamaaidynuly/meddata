<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSchedule extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];
}
