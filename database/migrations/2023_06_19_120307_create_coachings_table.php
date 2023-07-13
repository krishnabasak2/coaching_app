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
        Schema::create('coachings', function (Blueprint $table) {
            $table->id();
            $table->string('coaching_id')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('hade_name', 50)->nullable();
            $table->string('email', 50)->nullable()->unique();
            $table->string('phone', 10)->nullable()->unique();
            $table->string('address', 100)->nullable();
            $table->string('icon')->nullable();
            $table->string('password', 300)->nullable();
            $table->integer('max_student')->nullable();
            $table->date('subcription_end')->nullable();
            $table->set('status', ['active', 'block'])->default('block');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachings');
    }
};
