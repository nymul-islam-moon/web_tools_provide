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
        Schema::create('pending_services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->double('price')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 = Processed; 0 = Completed');
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
        Schema::dropIfExists('pending_services');
    }
};
