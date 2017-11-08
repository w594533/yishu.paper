<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("名称");
            $table->string("tel")->nullable()->default('')->comment("电话");
            $table->string("fax")->nullable()->default('')->comment("传真");
            $table->string("email")->nullable()->default('')->comment('邮箱');
            $table->string('address')->nullable()->default('')->comment('地址');
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
        Schema::dropIfExists('branches');
    }
}
