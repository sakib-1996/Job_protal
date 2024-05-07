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
        Schema::create('plugings_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')
            ->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('plugings_id');

            $table->foreign('plugings_id')->references('id')->on('plugings')
            ->cascadeOnDelete()->cascadeOnUpdate();

            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plugings_requests');
    }
};
