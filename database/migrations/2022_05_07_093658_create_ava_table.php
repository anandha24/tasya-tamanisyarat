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
        Schema::create('avas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email_user');
            $table->string('nama_user');
            $table->string('nama_file');
            $table->string('path');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avas');
    }
};
