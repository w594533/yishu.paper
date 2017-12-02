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
    $data = '12312';
    return view('welcome', compact('data'));
});

Auth::routes();


Route::get('/', 'Frontend\HomeController@show');

Route::group(['namespace' => 'Frontend'], function() {
  Route::get('home', 'HomeController@show')->name('home');

  Route::get('news', 'NewsController@toShowList')->name('news.list');
  Route::get('news/{post}', 'NewsController@show')->name('news.show');

  Route::get('product', 'ProductController@show')->name('product');

  Route::get('about', 'AboutController@show')->name('about');
  Route::get('isu_design', 'IsuDesignController@show')->name('isu_design');
  Route::get('news_center', 'NewsController@center')->name('news.center');
  Route::get('contact', 'ContactController@show')->name('contact');
  Route::get('default', 'DefaultController@show')->name('default');
  //
  // Route::post('feedback', 'HomeController@store')->name('feedback');
  //
  // Route::get('news', 'NewsController@toShowNewsList')->name('news');
  //
  // Route::get('news_info', 'NewsController@show')->name('news_info');
  //
  // Route::get('product', 'ProductController@toShowList')->name('product');
  //
  // Route::get('product_info', 'ProductController@show')->name('product_info');
  //
  // Route::get('case', 'CaseController@toShowList')->name('case');
  //
  // Route::get('case_info', 'CaseController@show')->name('case_info');
  //
  // Route::get('contact', 'ContactController@show')->name('contact');
  //
  // Route::get('about', 'AboutController@show')->name('about');
  // Route::get('hr', 'HrController@show')->name('hr');

});
