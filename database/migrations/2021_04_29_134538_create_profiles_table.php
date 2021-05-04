<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
           
            $table->unsignedBigInteger('user_id');
        
            $table->text('country');
            $table->text('city');
            $table->text('address');
            $table->text('phone');
            $table->text('age');
            $table->text('card_type');
            $table->string('card_number', 16);
            $table->text('card_date');
            $table->text('cvv');
        
            $table->timestamps();
        
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
