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
        Schema::create('s_m_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('host');
            $table->integer('port');
            $table->string('username');
            $table->string('password');
            $table->string('web_mail');
            $table->double('price');
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
        Schema::dropIfExists('s_m_t_p_s');
    }
};
