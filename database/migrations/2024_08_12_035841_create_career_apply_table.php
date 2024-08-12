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
        Schema::create('career_apply', function (Blueprint $table) {
            $table->id('careerapply_id');
            $table->unsignedBigInteger('vacancy_id');
            $table->foreign('vacancy_id')->references('vacancy_id')->on('add_vacancy');
            $table->string('name',255);
            $table->string('email',100);
            $table->integer('contact');
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_apply');
    }
};
