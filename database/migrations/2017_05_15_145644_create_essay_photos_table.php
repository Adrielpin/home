<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEssayPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essay_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->string('thumb');
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('essay_sections');
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
        Schema::dropIfExists('essay_photos');
    }
}
