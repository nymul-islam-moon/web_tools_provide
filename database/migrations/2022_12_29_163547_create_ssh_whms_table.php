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
            $table->string('ssh');
            $table->string('host_info');
            $table->string('has_whm');
            $table->string('country');
            $table->string('hosting');
            $table->string('rams');
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
        Schema::dropIfExists('ssh_whms');
    }
};
