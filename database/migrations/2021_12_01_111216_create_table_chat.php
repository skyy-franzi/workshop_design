<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id');
            $table->foreignId('recipient_user_id');
            $table->foreignId('sender_user_id');
            $table->text('message');
            $table->boolean('read');
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
