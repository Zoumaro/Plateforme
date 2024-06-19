<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 *
 * @property int $id
 * @property string|null $name
 * @property int $municipality_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Municipality $municipality
 * @property Collection|Company[] $companies
 * @property Collection|Locality[] $localities
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'districts';

	protected $casts = [
		'municipality_id' => 'int'
	];

	protected $fillable = [
		'name',
		'municipality_id'
	];

	public function municipality()
	{
		return $this->belongsTo(Municipality::class);
	}

	public function companies()
	{
		return $this->hasMany(Company::class);
	}

	public function localities()
	{
		return $this->hasMany(Locality::class);
	}

	public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
    }
}
