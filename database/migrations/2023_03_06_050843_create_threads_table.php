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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->integer('thread_id')->nullable()->default(null);
            $table->integer('user_id')->nullable();
            $table->integer('categoryy_id')->nullable()->default(null);
            $table->string('Title')->nullable();
            $table->string('content')->nullable();
            $table->string('sticky');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
