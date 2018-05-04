<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;
  protected $fillable = [
      'title', 'description', 'price', 'quantity', 'image_url', 'manufacturer_id', 'category_id'
  ];

  protected $dates = ['deleted_at'];
}
