<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      #新闻
      $ids = [2,3,4,5,6,7,9,10,12,13,15,16,17,18,19,20,21,22];
      foreach ($ids as $key => $id) {
        $images = array(
          'product1.jpg',
          'product2.jpg',
          'product3.jpg'
        );
        $new_images = array();
        foreach ($images as $key => $image) {
          $new_filename = md5($key.rand(0,999).rand(0,10000).time());
          Storage::copy($image, '/public/upload/products/image/'.$new_filename.'.jpg');
          $new_images[] = 'upload/products/image/'.$new_filename.'.jpg';
        }
        $date_time = date("Y-m-d H:i:s");
        $update = [
            'image' => json_encode($new_images),
            'created_at' => $date_time,
            'updated_at' => $date_time,
            'deleted_at' => null
        ];
        ProductCategory::where('id', $id)->update($update);
      }
    }
}
