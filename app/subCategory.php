<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product;

class subCategory extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'cat_id', 'name', 'caption'
  ];

  public function Category() {
    return $this->belongsTo(Category::class);
  }

  public function Product() {
    return $this->hasMany(Product::class, 'subCat_id');
  }
}
