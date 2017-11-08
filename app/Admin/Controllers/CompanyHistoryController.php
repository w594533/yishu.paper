<?php

namespace App\Admin\Controllers;

use App\Models\CompanyHistory;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CompanyHistoryController extends Controller
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

            $content->header('列表');
            $content->description('集团简介');

            $content->body($this->grid());
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
            $content->description('集团简介');

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
            $content->description('集团简介');

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
        return Admin::grid(CompanyHistory::class, function (Grid $grid) {
          $grid->disableFilter();
          $grid->disableCreation();
          $grid->disableExport();
          $grid->actions(function ($actions) {
            $actions->disableDelete();
          });
          $grid->tools(function ($tools) {
            $tools->batch(function ($batch) {
              $batch->disableDelete();
            });
          });
          

            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->year('年份');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(CompanyHistory::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', '标题')->help('可不填');
            $form->text('year', '年份');
            $form->textarea('body', '介绍');

            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
        });
    }
}
