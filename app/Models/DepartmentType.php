<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentType
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentType extends Model
{
    use HasFactory;
}
