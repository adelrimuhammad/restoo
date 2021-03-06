<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->string('table_number')->nullable();
            $table->foreignId('food_id')->constrained('foods')->onDelete('cascade');
            $table->string('customer_name');
            $table->integer('total_order');
            $table->integer('price_qty');
            $table->integer('total_price');
            $table->integer('total_delivered');
            $table->boolean('is_delivered')->nullable();
            $table->boolean('is_ready_to_be_paid')->nullable();
            $table->string('order_code')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_token')->nullable();
            $table->string('payment_url')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->boolean('is_done')->nullable();
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
}
