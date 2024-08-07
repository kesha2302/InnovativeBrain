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
        Schema::create('table_add_vacancy', function (Blueprint $table) {

            $table->id('vacancy_id');
            $table->string('post_for',255);
            $table->string('Experience',255);
            $table->integer('required_candidate');
            $table->string('Skills_req',600);
            $table->string('description',600);
            $table->string('type_of_job',255);
            $table->date('last_date');
            $table->string('responsibility',600);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_add_vacancy');
    }
};
