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
        Schema::create('requested_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = processing; 1 = completed');
            $table->tinyInteger('response')->default(0);
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
        Schema::dropIfExists('requested_products');
    }
};
