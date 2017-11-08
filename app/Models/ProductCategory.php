<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use ModelTree, AdminBuilder, SoftDeletes;
    protected $fillable = ['title', 'order', 'description', 'parent_id'];
    protected $dates = ['deleted_at'];
    public function products()
    {
      return $this->hasMany("App\Models\Product");
    }

    public function childrenCategories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

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
