<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * 
 * @property Category $category
 * @property Collection|Category[] $categories
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'name'
	];

	public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function children()
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function products()
	{
		return $this->belongsToMany(Product::class)
					->withPivot('id');
	}
}
