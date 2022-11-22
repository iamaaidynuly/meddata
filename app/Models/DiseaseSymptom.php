<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DiseaseSymptom
 *
 * @property int $id
 * @property int $disease_id
 * @property int $symptom_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom whereSymptomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiseaseSymptom whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DiseaseSymptom extends Model
{
    use HasFactory;
}
