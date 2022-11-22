<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DiseaseRiskFactor
 *
 * @property int $id
 * @property int $disease_id
 * @property int $risk_factor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor whereRiskFactorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseRiskFactor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DiseaseRiskFactor extends Model
{
    use HasFactory;
}
