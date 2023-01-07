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
        Schema::create('pending_reports', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('item_type');
            $table->double('price');
            $table->dateTime('report_time');
            $table->tinyInteger('status')->default(0)->comment('0 = Pending; 1 = Completed');
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
        Schema::dropIfExists('pending_reports');
    }
};
