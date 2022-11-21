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
        Schema::table('users',function (Blueprint $table) {
            $table->string('surname')->after('name')->nullable();
            $table->string('patronymic')->after('surname')->nullable();
            $table->string('iin')->after('patronymic')->nullable();
            $table->dateTime('birthday')->nullable()->after('iin');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('street')->nullable();
            $table->string('house')->nullable();
            $table->string('floor')->nullable();
            $table->string('apartment')->nullable();
            $table->string('index')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
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
