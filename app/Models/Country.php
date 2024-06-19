<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 *
 * @property int $id
 * @property string $name
 * @property string|null $code
 * @property string|null $phone_prefix
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Department[] $departments
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';

	protected $fillable = [
		'name',
		'code',
		'phone_prefix'
	];

	public function departments()
	{
		return $this->hasMany(Department::class);
	}
}
