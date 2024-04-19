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
        Schema::create('portfolio_details', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('desp')->nullable();
            $table->string('date')->nullable();
            $table->string('client_name')->nullable();
            $table->string('detail_img1')->nullable();
            $table->string('detail_img2')->nullable();
            $table->string('detail_img3')->nullable();
            $table->string('detail_img4')->nullable();
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
        Schema::dropIfExists('portfolio_details');
    }
};
