<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Analysis
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $fields
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Analysis extends Model
{
    use HasFactory;
}
