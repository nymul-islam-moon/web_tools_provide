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
        Schema::create('ssh_whms', function (Blueprint $table) {
            $table->id();
            $table->string('ssh')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('host_info')->nullable();
            $table->string('has_whm')->nullable();
            $table->string('country')->nullable();
            $table->string('hosting')->nullable();
            $table->string('rams')->nullable();
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
        Schema::dropIfExists('ssh_whms');
    }
};
