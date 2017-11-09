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
      \DB::table('product_categories')->truncate();

      \DB::table('product_categories')->insert(array (
          0 =>
          array (
              'id' => 1,
              'title' => '珠光系列',
              'image' => NULL,
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-07 17:47:24',
              'updated_at' => '2017-11-07 17:47:24',
              'deleted_at' => NULL,
          ),
          1 =>
          array (
              'id' => 2,
              'title' => '全木浆珠光100%',
              'image' => '["upload\\/products\\/image\\/834de03aec70e3204303112bc836e30a.jpg","upload\\/products\\/image\\/3e15d2fd64ecd5fbc283ebb9cde94ae4.jpg","upload\\/products\\/image\\/0b46a83d51cf1c22885f840c85211f5e.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:26',
              'updated_at' => '2017-11-08 16:14:26',
              'deleted_at' => NULL,
          ),
          2 =>
          array (
              'id' => 3,
              'title' => '原浆珠光',
              'image' => '["upload\\/products\\/image\\/a179a3b7a7feee5268ca388e436fbb18.jpg","upload\\/products\\/image\\/90fde7d6b31cc0e4bb943baf5ff366a8.jpg","upload\\/products\\/image\\/c8fc0eb553d56420d97b25e5559887a3.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:26',
              'updated_at' => '2017-11-08 16:14:26',
              'deleted_at' => NULL,
          ),
          3 =>
          array (
              'id' => 4,
              'title' => '压纹珠光',
              'image' => '["upload\\/products\\/image\\/e40fb5e862c2daf041744b8972ef8bd1.jpg","upload\\/products\\/image\\/a32eec52c43c8ced276d71493741bd83.jpg","upload\\/products\\/image\\/04097aefce63d3d1b078220446db67fd.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          4 =>
          array (
              'id' => 5,
              'title' => '喷涂珠光',
              'image' => '["upload\\/products\\/image\\/e5b868530fe1ca66e16717b744bf4991.jpg","upload\\/products\\/image\\/d55ea8cf8a89c4e9eec2f5d63cfb3b15.jpg","upload\\/products\\/image\\/526ddfdc89cde4ef7309208057197cb4.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          5 =>
          array (
              'id' => 6,
              'title' => '染色纸珠光',
              'image' => '["upload\\/products\\/image\\/ec3df49268bd711488a70e05a486def7.jpg","upload\\/products\\/image\\/38e4c7537f85df99d7090ca2ae6cab2b.jpg","upload\\/products\\/image\\/393a11d230eadbcb66e7d06d3c7b2862.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          6 =>
          array (
              'id' => 7,
              'title' => '凝彩触感珠光系列',
              'image' => '["upload\\/products\\/image\\/bb0636073ba9bd13a499539756460282.jpg","upload\\/products\\/image\\/8b4de317711d8482450ad404089d57a6.jpg","upload\\/products\\/image\\/e5dd01767e441b3cc7e7385a3b62adc2.jpg"]',
              'parent_id' => 1,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          7 =>
          array (
              'id' => 8,
              'title' => '全木浆系列100%',
              'image' => NULL,
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-07 17:50:03',
              'updated_at' => '2017-11-07 17:50:03',
              'deleted_at' => NULL,
          ),
          8 =>
          array (
              'id' => 9,
              'title' => '全木浆色卡100%',
              'image' => '["upload\\/products\\/image\\/9e4c3e9d80d04cb9c919c27096e85bf0.jpg","upload\\/products\\/image\\/505ceabe4d83dbfd983e95fa099e5f77.jpg","upload\\/products\\/image\\/8b8ba82cde996de29aa0337aef2060a5.jpg"]',
              'parent_id' => 8,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          9 =>
          array (
              'id' => 10,
              'title' => '全木浆压纹纸100%',
              'image' => '["upload\\/products\\/image\\/078d269ffec85ac45c564fce7749f943.jpg","upload\\/products\\/image\\/f071511d2ea369f24b9625a097e02087.jpg","upload\\/products\\/image\\/7f1ca5e23c60d5e9c45e689e25820387.jpg"]',
              'parent_id' => 8,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          10 =>
          array (
              'id' => 11,
              'title' => '原浆系列',
              'image' => NULL,
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-07 17:52:57',
              'updated_at' => '2017-11-07 17:52:57',
              'deleted_at' => NULL,
          ),
          11 =>
          array (
              'id' => 12,
              'title' => '原浆色卡',
              'image' => '["upload\\/products\\/image\\/89b0c1fab57c7a47b431123f72e4192a.jpg","upload\\/products\\/image\\/7f752fae23c4f0a6d60656ea06d07385.jpg","upload\\/products\\/image\\/59c30d055915f5b0e7f5d4206a0a6de4.jpg"]',
              'parent_id' => 11,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          12 =>
          array (
              'id' => 13,
              'title' => '原浆压纹纸',
              'image' => '["upload\\/products\\/image\\/4f1e206ed6b8673ecf1e2376d6475613.jpg","upload\\/products\\/image\\/53f4f5b2b9870194ec5a8b292344b46b.jpg","upload\\/products\\/image\\/cff00f246d892a06002907cf74e8c7fe.jpg"]',
              'parent_id' => 11,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          13 =>
          array (
              'id' => 14,
              'title' => '黑卡系列',
              'image' => NULL,
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-07 17:53:50',
              'updated_at' => '2017-11-07 17:53:50',
              'deleted_at' => NULL,
          ),
          14 =>
          array (
              'id' => 15,
              'title' => '小黑',
              'image' => '["upload\\/products\\/image\\/f7d948e9baded28aae7df5e66e4cc3c5.jpg","upload\\/products\\/image\\/68adcdc9efd72673f30ee2b6711da7d4.jpg","upload\\/products\\/image\\/aad8966d4fef048f7da102964825a55f.jpg"]',
              'parent_id' => 14,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          15 =>
          array (
              'id' => 16,
              'title' => '皮纹系列',
              'image' => '["upload\\/products\\/image\\/d735fdbcc495ef0005179b8529ade99d.jpg","upload\\/products\\/image\\/b5b645e54ed087648df678068ea29041.jpg","upload\\/products\\/image\\/2015a0ab2e7add2818f7c22aa1e10a3e.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          16 =>
          array (
              'id' => 17,
              'title' => '印花系列',
              'image' => '["upload\\/products\\/image\\/57c604d7d700f78e2329d564e9061610.jpg","upload\\/products\\/image\\/5d9878b09f56b3570056357aa3ec1317.jpg","upload\\/products\\/image\\/834b9a1eab10b2f3cab91a31175d9266.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          17 =>
          array (
              'id' => 18,
              'title' => '触感系列',
              'image' => '["upload\\/products\\/image\\/e29a96d467026c340c817bb605c9486f.jpg","upload\\/products\\/image\\/ba84a2bb7a0cb304da2573d0722ff0b1.jpg","upload\\/products\\/image\\/5645042b8f59236637d1515f79c70395.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          18 =>
          array (
              'id' => 19,
              'title' => '优阅亮丽系列',
              'image' => '["upload\\/products\\/image\\/4fe1d3d47d1d76b4d56f04ac17babc26.jpg","upload\\/products\\/image\\/33437a7acab6de6ea205aab8eb0eb40f.jpg","upload\\/products\\/image\\/4eef2330b927cba55cf2d4b3e30c80d9.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          19 =>
          array (
              'id' => 20,
              'title' => '麻藤质感纸',
              'image' => '["upload\\/products\\/image\\/05b07d62936e8f01785541f677884d39.jpg","upload\\/products\\/image\\/ed43b41782d2eac7ca539fb497db9864.jpg","upload\\/products\\/image\\/17a52716c5a01e84bbfb449cc80886a0.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          20 =>
          array (
              'id' => 21,
              'title' => '悠然质感系列',
              'image' => '["upload\\/products\\/image\\/2c22485fc769b2c8faa147e1dcab87a8.jpg","upload\\/products\\/image\\/16bf6836dbaa3ef0761fabdecd886d13.jpg","upload\\/products\\/image\\/591b6dc2ba6d024f40ac0459aba67d37.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
          21 =>
          array (
              'id' => 22,
              'title' => '轻涂超感系列',
              'image' => '["upload\\/products\\/image\\/19e00b48a858425b1981a28c9e75e2c8.jpg","upload\\/products\\/image\\/05fceadfdde2feff41fc6a7891c4efc0.jpg","upload\\/products\\/image\\/bdb558950c8d89caecde143e8d24b4e2.jpg"]',
              'parent_id' => 0,
              'description' => NULL,
              'order' => NULL,
              'created_at' => '2017-11-08 16:14:27',
              'updated_at' => '2017-11-08 16:14:27',
              'deleted_at' => NULL,
          ),
      ));

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
