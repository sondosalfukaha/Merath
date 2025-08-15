<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_order_items_table.php
public function up()
{
    Schema::create('order_items', function (Blueprint $table) {
        $table->id(); // item_id
        $table->unsignedBigInteger('order_id'); // reference to orders table (no foreign key constraint)
        $table->unsignedBigInteger('product_id');
        $table->string('product_name');
        $table->integer('quantity');
        $table->decimal('price', 10, 2); // price per unit
        $table->decimal('subtotal', 10, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
