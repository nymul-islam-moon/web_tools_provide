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
        Schema::create('lufix_services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('selling_type')->nullable();
            $table->string('price_type')->nullable();
            $table->string('duration')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Disable; 1 = Enable');
            $table->string('proof')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('lufix_services');
    }
};
