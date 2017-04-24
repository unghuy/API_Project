<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Products', function(Blueprint $table){
        $table->increments('pro_id');
        $table->string('pro_name');
        $table->longtext('pro_image');
        $table->integer('pro_price');
        $table->integer('cate_id')->unsigned();
        $table->foreign('cate_id')->references('cate_id')->on('Categories');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
