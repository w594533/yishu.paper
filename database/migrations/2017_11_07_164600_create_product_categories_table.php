<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('分类标题');
            $table->text('image')->nullable()->comment('分类配图');
            $table->tinyInteger('parent_id')->default('0')->nullable()->index()->ungisned()->comment('父类id');
            $table->text('description')->nullable()->comment('描述');
            $table->integer('order')->nullable()->comment('排序');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
