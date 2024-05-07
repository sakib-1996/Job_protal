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
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();

            $table->longText('linkedIn_link')->nullable();
            $table->longText('facebook_link')->nullable();
            $table->longText('gitHub_link')->nullable();
            $table->longText('portfolio_website')->nullable();
            $table->longText('edu_information')->nullable();
            $table->longText('job_exp')->nullable();
            $table->longText('expected_salary')->nullable();
            $table->longText('credentials')->nullable();
            $table->boolean('status')->default(false);


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')
                ->cascadeOnDelete()->cascadeOnUpdate();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applies');
    }
};
