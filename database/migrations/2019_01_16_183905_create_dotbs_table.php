<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('dotbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dao_id')->index();
            $table->string('user_id')->index();
            $table->text('street');
            $table->text('home');
            $table->text('city');
            $table->text('country');
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
        Schema::dropIfExists('dotbs');
    }
}
