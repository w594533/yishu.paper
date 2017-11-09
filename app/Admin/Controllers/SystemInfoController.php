<?php

namespace App\Admin\Controllers;

use App\Models\SystemInfo;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SystemInfoController extends Controller
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

            $content->header('网站信息');
            $content->description('描述');

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
            $content->description('系统信息');

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

            $content->header('新建');
            $content->description('系统信息');

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
        return Admin::grid(SystemInfo::class, function (Grid $grid) {
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
            $grid->phone('电话');
            $grid->email('邮箱');


        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SystemInfo::class, function (Form $form) {

          $form->tab('联系信息', function ($form) {
            $form->display('id', 'ID');
            $form->text('phone', '电话');
            $form->email('email', '邮箱');
          })->tab('一树设计信息', function ($form){
            $form->text('isudesign_site', '官网地址');
            $form->textarea('about_body', '介绍');
          })->tab('Meta优化', function($form) {
            $form->text("meta_title", '标题');
            $form->text('meta_keywords', '关键词');
            $form->text('meta_description', '描述');
          });
        });
    }
}
