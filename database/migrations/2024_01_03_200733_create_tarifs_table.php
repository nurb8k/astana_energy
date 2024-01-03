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
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            $table->string('name_kz');
            $table->string('name_ru');
            $table->string('date_kz');
            $table->string('date_ru');
            $table->string('tarif');
            $table->string('doc_kz');
            $table->string('doc_ru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarifs');
    }
};
