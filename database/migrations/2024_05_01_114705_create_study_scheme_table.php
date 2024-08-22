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
        Schema::create('study_scheme', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->integer('sem');
            $table->string('option_type');
            $table->string('domain');
            $table->string('category');
            $table->integer('is_int');
            $table->string('intmm');
            $table->integer('is_ext');
            $table->integer('extmm');
            $table->integer('totmm');
            $table->string('breakup');
            $table->integer('l');
            $table->integer('t');
            $table->integer('p');
            $table->integer('hr');
            $table->integer('cr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_scheme');
    }
};
