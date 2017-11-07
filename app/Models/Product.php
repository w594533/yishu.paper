<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
      return $this->belongsTo('App\Models\Category');
    }

    public function setImgAttribute($img)
    {
      if (is_array($img)) {
        $this->attributes['img'] = json_encode($img);
      }
    }

    public function getImgAttribute($img)
    {

      return array_map(function($value) {
        return config('app.url'). '/storage/'. $value;
      }, json_decode($img, true));
    }

    public function setDetailAttribute($detail)
    {
      if (is_array($detail)) {
        $arr_detail = $detail;
      } else {
        $arr_detail = array();
        $detail = trim($detail);
        $arr_detail = explode("\r\n", $detail);
      }

      if (is_array($arr_detail)) {
        $this->attributes['detail'] = json_encode($arr_detail);
      }
    }

    public function getDetailAttribute($detail)
    {
      return implode("\r\n", json_decode($detail, true));
    }
}
