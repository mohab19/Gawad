<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\subCategory;
use App\Family;

class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'subCat_id', 'family_id','path', 'name', 'caption', 'flag'
  ];

  public function Category() {
    return $this->belongsTo(subCategory::class, 'subCat_id');
  }

  public function Family() {
    return $this->belongsTo(Family::class, 'family_id');
  }
}
