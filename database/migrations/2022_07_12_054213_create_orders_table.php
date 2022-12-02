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
            $table->text('order_id');
            $table->text('user_id');
            $table->text('cart_subtotal');
            $table->text('discount');
            $table->text('coupon_code');
            $table->text('coupon_value');
            $table->text('shipping_charges');
            $table->text('total_amount');
            $table->text('shipping_address');
            $table->text('billing_address');
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
