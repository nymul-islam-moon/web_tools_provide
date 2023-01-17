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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('download_link')->nullable();
            $table->string('phone_number')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('provider')->nullable();
            $table->text('description')->nullable();
            $table->text('additional_information')->nullable();
            $table->string('proof')->nullable();
            $table->string('country')->nullable();
            $table->double('price')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = disable; 1 = enable');
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
        Schema::dropIfExists('leads');
    }
};
