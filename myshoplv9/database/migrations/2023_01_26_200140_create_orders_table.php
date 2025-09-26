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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('reciever_name');
            $table->string('reciever_last_name');
            $table->string('reciever_email')->nullabe();
            $table->set('status', ['unpaid', 'pending', 'preparing', 'readyToSend', 'sent', 'received'])->default('unpaid');
            $table->unsignedBigInteger('send_type_id');
            $table->dateTime('send_date');
            $table->string('send_price')->nullable();
            $table->string('pay_type_id');
            $table->string('total_price');
            $table->set('pay_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('postal_code');
            $table->text('full_address');
            $table->string('house_number');
            $table->string('description');
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
        Schema::dropIfExists('orders');
    }
};
