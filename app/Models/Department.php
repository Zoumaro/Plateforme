<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 *
 * @property int $id
 * @property string|null $name
 * @property int $country_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Country $country
 * @property Collection|Company[] $companies
 * @property Collection|Municipality[] $municipalities
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'name',
		'country_id'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function companies()
	{
		return $this->hasMany(Company::class);
	}

	public function municipalities()
	{
		return $this->hasMany(Municipality::class);
	}


	public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
    }
}
