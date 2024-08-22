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
        Schema::table('study_scheme', function (Blueprint $table) {
            $table->string('course_title')->nullable()->change();
            $table->integer('sem')->nullable()->change();
            $table->string('option_type')->nullable()->change();
            $table->string('domain')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->integer('is_int')->nullable()->change();
            $table->string('intmm')->nullable()->change();
            $table->integer('is_ext')->nullable()->change();
            $table->integer('extmm')->nullable()->change();
            $table->integer('totmm')->nullable()->change();
            $table->string('breakup')->nullable()->change();
            $table->integer('l')->nullable()->change();
            $table->integer('t')->nullable()->change();
            $table->integer('p')->nullable()->change();
            $table->integer('hr')->nullable()->change();
            $table->integer('cr')->nullable()->change();
        });
    }

    public function down(): void
    {
        //
    }
};
