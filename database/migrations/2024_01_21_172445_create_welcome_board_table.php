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
        Schema::create('welcome_board', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('old_title');
            $table->string('new_title');
            $table->string('old_descr');
            $table->string('new_descr');
            $table->string('old_img');
            $table->string('new_img');
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
        Schema::dropIfExists('welcome_board');
    }
};
