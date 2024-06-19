<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Locality
 *
 * @property int $id
 * @property string|null $name
 * @property int $district_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property District $district
 * @property Collection|Company[] $companies
 *
 * @package App\Models
 */
class Locality extends Model
{
	protected $table = 'localities';

	protected $casts = [
		'district_id' => 'int'
	];

	protected $fillable = [
		'name',
		'district_id'
	];

	public function district()
	{
		return $this->belongsTo(District::class);
	}

	public function companies()
	{
		return $this->hasMany(Company::class);
	}
}
