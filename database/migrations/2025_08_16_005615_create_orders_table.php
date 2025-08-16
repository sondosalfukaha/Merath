<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('order_number')->unique();
        $table->string('name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->decimal('total_amount', 10, 2);
        $table->string('status')->default('pending'); // pending, processing, completed
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
