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
        Schema::create('table_internship', function (Blueprint $table) {
            $table->id('intern_id');
            $table->string('name',255);
            $table->string('email',255);
            $table->integer('contact');
            $table->string('resume',600);
            $table->string('message',600);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_internship');
    }
};
