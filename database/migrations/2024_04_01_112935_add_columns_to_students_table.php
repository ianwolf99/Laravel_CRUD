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
        Schema::table('students', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('nationality');
            $table->string('address');
            $table->string('phone_number');
            $table->date('admission_date');
            $table->date('graduation_date')->nullable();
            
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
