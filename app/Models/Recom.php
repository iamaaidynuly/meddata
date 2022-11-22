<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Recom
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $fields
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Recom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recom query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recom whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Recom extends Model
{
    use HasFactory;
}
