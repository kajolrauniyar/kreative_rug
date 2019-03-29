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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('size')->nullable();
            $table->integer('category_id');
            $table->string('thumb');
            $table->string('path');
            $table->text('description');
            $table->text('note');
            $table->boolean('status')->default(0);
            $table->boolean('featured')->default(0);
            $table->text('meta_description');
            $table->text('mtitle');
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
        Schema::dropIfExists('products');
    }
}
