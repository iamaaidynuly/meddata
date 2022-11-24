<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Clinic
 *
 * @property int $id
 * @property string $title
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clinic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Clinic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function manager() {
        return $this->belongsTo(User::class, 'manager_id');
    }

}
