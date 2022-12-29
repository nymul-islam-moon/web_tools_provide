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
        Schema::create('rdps', function (Blueprint $table) {
            $table->id();
            $table->string('rdp');
            $table->string('location');
            $table->string('guranteed');
            $table->string('hosting');
            $table->string('source');
            $table->string('access');
            $table->string('os');
            $table->float('price');
            $table->string('rams');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('rdps');
    }
};
