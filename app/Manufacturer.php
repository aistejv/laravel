<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
  protected $fillable = [
      'name', 'country', 'manufacturer_id'
  ];

  public function products(){
    return $this->hasMany('App\Product');
  }
}
