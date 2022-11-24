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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('price1');
            $table->string('old_price_1')->nullable();
            $table->integer('days_1');
            $table->string('price_2');
            $table->string('old_price_2')->nullable();
            $table->integer('days_2');
            $table->string('price_3');
            $table->string('old_price_3')->nullable();
            $table->integer('days_3');
            $table->integer('max_doctors');
            $table->text('payment_solution')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
};
