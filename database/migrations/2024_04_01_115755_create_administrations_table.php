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
        Schema::create('administrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('department');
            $table->string('position');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('office_location');
            $table->string('office_hours');
            $table->text('responsibilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrations');
    }
};
