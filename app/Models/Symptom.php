<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Symptom
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $fields
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom query()
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Symptom whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Symptom extends Model
{
    use HasFactory;
}
