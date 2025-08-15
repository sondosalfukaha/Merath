<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_orders_table.php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // order_id linked with order2 table
        $table->string('customer_name');
        $table->string('customer_email');
        $table->string('customer_phone')->nullable();
        $table->string('customer_address')->nullable();
        $table->decimal('total_price', 10, 2);
        $table->string('status')->default('pending'); // pending, paid, shipped...
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
