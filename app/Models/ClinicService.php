<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ClinicService
 *
 * @property int $id
 * @property int $clinic_id
 * @property int $service_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService whereClinicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService whereServiceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClinicService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClinicService extends Model
{
    use HasFactory;
}
