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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name');
            $table->string('logo')->nullable();
            $table->string('title');
            $table->string('location');
            $table->string('short_des');
            $table->string('salary');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('experience_id');
            $table->boolean('status')->default(false);
            $table->date('dateline');

            $table->foreign('experience_id')->references('id')->on('experiences')
                ->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('category_id')->references('id')->on('categories')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('type_id')->references('id')->on('types')
                ->cascadeOnDelete()->cascadeOnUpdate();

            $table->longText('job_details');
            $table->longText('requirment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
