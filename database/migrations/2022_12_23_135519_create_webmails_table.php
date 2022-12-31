<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webmails', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('username');
            $table->string('password');
            $table->string('country');
            $table->string('hosting');
            $table->string('category');
            $table->double('price');
            $table->tinyInteger('status');
            $table->string('added');
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
        Schema::dropIfExists('webmails');
    }
};
