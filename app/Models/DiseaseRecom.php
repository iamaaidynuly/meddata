<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DiseaseRecom
 *
 * @property int $id
 * @property int $disease_id
 * @property int $recom_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom whereRecomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRecom whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DiseaseRecom extends Model
{
    use HasFactory;
}
