<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DiseaseAnalysis
 *
 * @property int $id
 * @property int $disease_id
 * @property int $analyse_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis whereAnalyseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseAnalysis whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DiseaseAnalysis extends Model
{
    use HasFactory;
}
