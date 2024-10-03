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
        Schema::create('upload_documents', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('size');
            $table->string('speed')->nullable();
            $table->string('status')->default('Pendente');
            $table->time('hour');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_documents');
    }
};
