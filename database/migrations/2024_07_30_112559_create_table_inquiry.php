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
        Schema::create('table_inquiry', function (Blueprint $table) {
            $table->id('inquiry_id');
            $table->string('name',255);
            $table->string('email',255);
            $table->integer('contact');
            $table->string('interested_in',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_inquiry');
    }
};
