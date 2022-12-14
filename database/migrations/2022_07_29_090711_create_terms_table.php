<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('payment_mode', 50)->nullable();
            $table->string('partial_shipment', 50)->nullable();
            $table->string('trans_shipment', 50)->nullable();
            $table->string('lc_type', 200)->nullable();
            $table->string('time_of_arrival',200)->nullable();
            $table->string('incoterm',200)->nullable();
            $table->string('frieght_payment', 200)->nullable();
            $table->double('total_price')->nullable();
            $table->double('frieght_cost')->nullable();
            $table->double('cost_and_frieght')->nullable();
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
        Schema::dropIfExists('terms');
    }
}
