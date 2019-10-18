<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheatreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theaters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('slug');
            $table->unsignedBigInteger('name');
            $table->mediumText('description');
            $table->text('text');
            $table->timestamps();
            $table->timestamps();
            
            $table->unique(['user_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theaters');
    }
}
