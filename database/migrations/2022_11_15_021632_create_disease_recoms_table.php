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
        Schema::create('disease_recoms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disease_id')->constrained('diseases')->cascadeOnDelete();
            $table->foreignId('recom_id')->constrained('recoms')->cascadeOnDelete();
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
        Schema::dropIfExists('disease_recoms');
    }
};
