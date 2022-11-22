<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ClientMedicalData
 *
 * @property int $id
 * @property int $client_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientMedicalData whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClientMedicalData extends Model
{
    use HasFactory;
}
