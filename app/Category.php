<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\subCategory;

class Category extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'caption'
  ];

  public function subCategory() {
    return $this->hasMany(subCategory::class);
  }
}
