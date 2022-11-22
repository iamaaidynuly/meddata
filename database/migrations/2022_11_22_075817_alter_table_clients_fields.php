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
        Schema::table('clients', function (Blueprint $table) {
            $table->string('name')->after('id')->nullable();
            $table->string('surname')->after('name')->nullable();
            $table->string('login')->after('surname')->nullable();
            $table->dateTime('birthday')->nullable()->after('phone');
            $table->enum('gender', ['male','female'])->default('male')->after('birthday');
            $table->foreignId('city_id')->after('gender')->nullable()->constrained('cities')->cascadeOnDelete();
            $table->string('image')->after('city_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
