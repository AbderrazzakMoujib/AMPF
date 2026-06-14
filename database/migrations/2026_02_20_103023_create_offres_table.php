<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('company_name');
            $table->string('phone')->nullable();
            $table->string('adresse')->nullable();
            $table->enum('type_offre', ['600','1000','1500','3000','6000','12000','40000']);
            $table->enum('status', ['pending','confirmed','rejected'])->default('pending');
            $table->date('confirmed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};