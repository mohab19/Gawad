<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Family extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'caption'
  ];

  public function Category() {
    return $this->hasMany(Product::class);
  }
}
