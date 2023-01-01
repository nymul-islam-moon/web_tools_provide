<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('letter_name')->nullable();
            $table->string('hits_link')->nullable();
            $table->text('description')->nullable();
            $table->string('proof')->nullable();
            $table->string('selling_type')->nullable();
            $table->string('instruction')->nullable();
            $table->float('price')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('letters');
    }
};
