<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

/**
 * Class Municipality
 *
 * @property int $id
 * @property string|null $name
 * @property int $department_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property  $department
 * @property Collection|Company[] $companies
 * @property Collection|District[] $districts
 *
 * @package App\Models
 */
class Municipality extends Model
{
	protected $table = 'municipalities';

	protected $casts = [
		'department_id' => 'int'
	];

	protected $fillable = [
		'name',
		'department_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function companies()
	{
		return $this->hasMany(Company::class);
	}

	public function districts()
	{
		return $this->hasMany(District::class);
	}

	public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
    }
}
