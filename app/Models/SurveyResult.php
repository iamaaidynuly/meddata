<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SurveyResult
 *
 * @property int $id
 * @property int $disease_id
 * @property int $survey_id
 * @property string $fields
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereDiseaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyResult whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SurveyResult extends Model
{
    use HasFactory;
}
