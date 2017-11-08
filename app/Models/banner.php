<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
  public function setImageAttribute($image)
  {
    if (is_array($image)) {
      $this->attributes['image'] = json_encode($image);
    }
  }

  public function getImageAttribute($image)
  {
    if ($image) {
      return array_map(function($value) {
        return config('app.url'). '/storage/'. $value;
      }, json_decode($image, true));
    } else {
      return [];
    }
  }
}
