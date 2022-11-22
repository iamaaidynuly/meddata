<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RiskFactor
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor query()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskFactor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RiskFactor extends Model
{
    use HasFactory;
}
