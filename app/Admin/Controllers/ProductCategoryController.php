<?php

namespace App\Admin\Controllers;

use App\Models\ProductCategory;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProductCategoryController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
      return Admin::content(function (Content $content) {
          $content->header('所有列表');
          $content->body(ProductCategory::tree());
      });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑');
            $content->description('产品');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('新增');
            $content->description('产品');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(ProductCategory::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(ProductCategory::class, function (Form $form) {
          $form->display('id', 'ID');
          $form->select('parent_id', '父级分类')->options(ProductCategory::selectOptions());
          $form->text('title', '名称');
          $form->multipleImage('image', '图片')->removable()->help("多图片")->uniqueName()->move('/upload/product_categories/image');
          $form->editor('description', '描述')->help("如果此项是二级分类，描述可以不用填写，只填写一级分类的描述即可");
          $form->display('created_at', '创建时间');
          $form->display('updated_at', '更新时间');
        });
    }
}
