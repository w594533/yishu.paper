<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function array2object($array) {
  if (is_array($array)) {
    $obj = new StdClass();
    foreach ($array as $key => $val){
      $obj->$key = $val;
    }
  }
  else { $obj = $array; }
  return $obj;
}

Route::get('/', function () {
    return view('welcome', compact('data'));
});

Auth::routes();


Route::get('/', 'Frontend\HomeController@show');

Route::group(['namespace' => 'Frontend'], function() {
  Route::get('home', 'HomeController@show')->name('home');

  Route::get('news', 'NewsController@toShowList')->name('news.list');
  Route::get('news/{post}', 'NewsController@show')->name('news.show');

  Route::get('product', 'ProductController@show')->name('product');
  Route::get('ajaxproduct', 'ProductController@ajaxshow')->name('product.ajaxshow');

  Route::get('about', 'AboutController@show')->name('about');
  Route::get('isu_design', 'IsuDesignController@show')->name('isu_design');
  Route::get('news_center', 'NewsController@center')->name('news.center');
  Route::get('contact', 'ContactController@show')->name('contact');
  Route::get('default', 'DefaultController@show')->name('default');

});
