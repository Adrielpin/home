<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
           $table->integer('level')->unsigned();
           $table->foreign('level')->references('id')->on('user_levels');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['level']);
        });
        
        Schema::dropIfExists('user_levels');
    }
}
