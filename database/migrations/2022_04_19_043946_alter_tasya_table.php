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
        Schema::table('t_a_s_y_a_s', function (Blueprint $table) {
            $table->renameColumn('email','email_user');
            $table -> unique ('email_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_a_s_y_a_s', function (Blueprint $table) {
            $table->renameColumn('email_user','email');
            $table -> dropUnique ('email_user');
        });
    }
};
