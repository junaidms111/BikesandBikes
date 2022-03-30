<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email',255);
            $table->timestamp('email_verified_at')->timestamp();
            $table->string('password',255);
            $table->string('phone_number',255);
            $table->date('DOB');
            $table->string('address',255);
            $table->string('city',255);
            $table->string('country',255);
            $table->unsignedTinyInteger('status');
            $table->string('remember_token',100)->rememberToken();
            /*
            $table->unsignedBigInteger('bookings_id');
            $table->foreign('bookings_id')->references('id')->on('bookings');
            $table->unsignedBigInteger('bookings_vehicles');
            $table->foreign('bookings_vehicles')->references('id')->on('vehicles');
            $table->unsignedBigInteger('subscription_id');
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            */
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
        Schema::dropIfExists('users');
    }
}
