<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SurveyRecipe
 *
 * @property int $id
 * @property int $survey_id
 * @property string $fields
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SurveyRecipe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SurveyRecipe extends Model
{
    use HasFactory;
}
