<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'title', 'description', 'price', 'quantity', 'image_url', 'manufacturer_id', 'category_id'
  ];
}
