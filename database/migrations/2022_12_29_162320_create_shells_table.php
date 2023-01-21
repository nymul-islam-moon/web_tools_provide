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
        Schema::create('shells', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('source')->nullable();
            $table->string('country')->nullable();
            $table->string('hosting')->nullable();
            $table->string('seo_rank')->nullable();
            $table->string('hosting_info')->nullable();
            $table->float('price')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('shells');
    }
};
