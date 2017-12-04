<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
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
        return $value;
      }, json_decode($image, true));
    } else {
      return [];
    }
  }
}
