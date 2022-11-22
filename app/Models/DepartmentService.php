<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentService
 *
 * @property int $id
 * @property int $service_type_id
 * @property int $department_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereDepartmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereServiceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentService extends Model
{
    use HasFactory;
}
