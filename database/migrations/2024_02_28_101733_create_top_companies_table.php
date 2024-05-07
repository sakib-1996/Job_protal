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
        Schema::create('top_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_id');
            $table->foreign('about_id')->references('id')->on('abouts')
                ->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('top_com');
            $table->foreign('top_com')->references('id')->on('company_profiles')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_companies');
    }
};
