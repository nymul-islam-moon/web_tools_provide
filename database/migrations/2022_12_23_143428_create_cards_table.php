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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('security_type')->nullable();
            $table->bigInteger('card_number')->nullable();
            $table->date('expiration')->nullable();
            $table->integer('cvv')->nullable();
            $table->string('available_info')->nullable();
            $table->text('all_info')->nullable();
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
        Schema::dropIfExists('cards');
    }
};
