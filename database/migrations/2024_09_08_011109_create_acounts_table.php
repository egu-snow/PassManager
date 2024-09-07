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
        Schema::create('acounts', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('login_id')->nullable();
            $table->string('password')->nullable();
            $table->string('mail_address')->nullable();
            $table->string('memo')->nullable();
            $table->integer('category_numb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acounts');
    }
};
