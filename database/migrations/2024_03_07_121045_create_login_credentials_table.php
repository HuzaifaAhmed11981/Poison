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
        Schema::create('login_credentials', function (Blueprint $table) {
            $table->id();
            $table->string('email')->default('admin@gmail.com');
            $table->string('password')->default('$2y$10$X.PsgTJUgTYW.KYjuBPSdu.OL6wso/j9BPgd281QNA2Cskct9O0Xu');
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
        Schema::dropIfExists('login_credentials');
    }
};
