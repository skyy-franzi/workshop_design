<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->date('offer_date');
            $table->string('title', 255);
            $table->text('description');
            $table->string('street', 255);
            $table->string('city', 255);
            $table->integer('zip');
            $table->float('lat');
            $table->float('lng');
            $table->integer('views_count');
            $table->date('expiration_time');
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
      //
    }
}
