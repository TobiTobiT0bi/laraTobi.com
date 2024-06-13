<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Brand
 * 
 * @property int $id
 * @property string $brand
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Brand extends Model
{
	use SoftDeletes;
	protected $table = 'brands';

	protected $fillable = [
		'brand'
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
