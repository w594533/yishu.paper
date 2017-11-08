<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/categories', 'CategoriesController');
    #
    $router->resource('/company_dynamics', 'CompanyDynamicsController');

    $router->resource('/industry_information', 'IndustryInformationController');

    $router->resource('/focus_media', 'FocusMediaController');

    $router->resource('/notice', 'NoticeController');

    $router->resource('/system_info', 'SystemInfoController');

    $router->resource('/product_categories', 'ProductCategoryController');
    $router->resource('/branches', 'BranchController');
    $router->resource('/banners', 'BannerController');
    $router->resource('/company_histories', 'CompanyHistoryController');







});
