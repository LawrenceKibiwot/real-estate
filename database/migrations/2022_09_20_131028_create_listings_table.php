<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_name');
            $table->string('location');
            $table->string('type');
            $table->integer('rent');
            $table->integer('size');
            $table->string('status')->default('Vaccant');
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
        Schema::dropIfExists('posts');
    }
}
