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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_id')->nullable();
            $table->string('coaching_id')->nullable();
            $table->string('batch_name', 150)->nullable();
            $table->string('batch_slug', 150)->nullable();
            $table->string('description', 500)->nullable();
            $table->string('starting_date')->nullable();
            $table->set('status', ['active', 'suspend'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
