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
        Schema::create('automatic_routines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cnpj_id');
            $table->string('document');
            $table->time('hour');

            $table->timestamps();

            $table->foreign('cnpj_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automatic_routines');
    }
};
