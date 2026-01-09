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
        $table->id('id')->autoIncrement();
        $table->foreignId('schools_id')->constrained('schools', 'id')->onDelete('cascade');
        $table->string('full_name',255);
        $table->string('student_id',255);
        $table->string('email', 100)->unique();
        $table->string('phone',255);
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
