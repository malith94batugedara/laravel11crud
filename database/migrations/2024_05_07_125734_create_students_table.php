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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('stu_name');
            $table->string('stu_reg_no');   
            $table->string('stu_address');
            $table->string('stu_age');
            $table->string('stu_grade');
            $table->string('stu_image');
            $table->string('stu_gender');
            $table->string('stu_prefered_grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
