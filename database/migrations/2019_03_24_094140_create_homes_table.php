<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banner');
            $table->string('heading');
            $table->string('subheading');

            $table->string('section1_title');
            $table->string('section1_image');
            $table->text('section1_content');

            $table->string('section2_title');
            $table->text('section2_content');

            $table->string('section3_title');
            $table->text('section3_content');
            
            $table->string('section4_title');
            $table->text('section4_content');

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
        Schema::dropIfExists('homes');
    }
}
