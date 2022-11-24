<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Subscription;
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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('legal_title');
            $table->text('desc');
            $table->text('address');
            $table->string('contact');
            $table->string('license');
            $table->string('license_file');
            $table->date('license_date');
            $table->foreignIdFor(Subscription::class)->nullable();
            $table->date('subscription_finish_date')->nullable();
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
        Schema::dropIfExists('clinics');
    }
};
