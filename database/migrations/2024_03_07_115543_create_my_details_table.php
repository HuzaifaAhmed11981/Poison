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
        Schema::create('my_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('current_jobtitle')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('intro_video')->nullable();
            $table->string('big_desp')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_details');
    }
};
