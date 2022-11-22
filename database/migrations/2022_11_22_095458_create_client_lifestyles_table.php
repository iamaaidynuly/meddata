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
        Schema::create('client_lifestyles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete();
            $table->foreignId('lifestyle_id')->constrained('lifestyles')->cascadeOnDelete();
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->boolean('office_worker')->default(false)->after('term');
            $table->boolean('physical work')->default(false)->after('office_worker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_lifestyles');
    }
};
