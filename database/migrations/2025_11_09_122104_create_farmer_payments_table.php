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
        Schema::create('farmer_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->string('farmer_id_number')->nullable();

            $table->enum('payment_type', ['MPESA', 'BANK', 'BOTH']);

            // MPESA info
            $table->string('mpesa_phone')->nullable();

            // Bank info
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();

            $table->timestamps();

            // Foreign key
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_payments');
    }
};
