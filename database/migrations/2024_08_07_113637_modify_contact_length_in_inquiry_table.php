<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContactLengthInInquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inquiry', function (Blueprint $table) {
            $table->string('contact', 10)->change(); // Adjust the length as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inquiry', function (Blueprint $table) {
            $table->string('contact', 15)->change(); // Revert back to original length if needed
        });
    }
}
