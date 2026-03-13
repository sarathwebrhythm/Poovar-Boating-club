<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('transactions', function (Blueprint $table) {

            $table->id();

            $table->foreignId('temporary_booking_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('transaction_id'); 

            $table->string('gateway')->default('phonepe');

            $table->string('phonepe_ref')->nullable(); // UPI reference

            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
