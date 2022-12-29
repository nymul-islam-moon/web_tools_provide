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
            $table->string('shell');
            $table->string('country');
            $table->string('hosting');
            $table->string('seo_rank');
            $table->string('host_info');
            $table->float('price');
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
        Schema::dropIfExists('shells');
    }
};
