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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_type')->nullable();
            $table->string('hits_link')->nullable();
            $table->string('website')->nullable();
            $table->string('source')->nullable();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->string('proof')->nullable();
            $table->float('price')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Disable; 1 = Enable');
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
        Schema::dropIfExists('accounts');
    }
};
