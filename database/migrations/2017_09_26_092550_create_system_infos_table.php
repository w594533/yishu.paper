<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->index()->coment('总机');
            $table->string('email')->index()->comment('邮箱');
            $table->string('cn_site')->comment('中文网址');
            $table->string('en_site')->comment('英文网址');
            $table->text('about_body')->nullable()->comment('一树设计的描述');
            $table->string('isudesign_site')->nullable()->default('')->comment('一树设计的官方网站');
            $table->string('meta_keywords')->default('')->nullable()->comment('关键词');
            $table->string('meta_description')->default('')->nullable()->comment('描述');
            $table->string('meta_title')->default('')->nullable()->comment('标题');
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
        Schema::dropIfExists('system_infos');
    }
}
