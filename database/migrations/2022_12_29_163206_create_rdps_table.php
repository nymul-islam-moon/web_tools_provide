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
            $table->string('rdp')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('location')->nullable();
            $table->string('guranteed')->nullable();
            $table->string('hosting')->nullable();
            $table->string('source')->nullable();
            $table->string('access')->nullable();
            $table->string('os')->nullable();
            $table->float('price')->nullable();
            $table->string('rams')->nullable();
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
        Schema::dropIfExists('rdps');
    }
};
