<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_category()
    {
      return $this->belongTo("App\Models\ProductCategory");
    }
}
