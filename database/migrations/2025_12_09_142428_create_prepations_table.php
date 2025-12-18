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
        Schema::create('prepations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teachers_id')->constrained('teachers');
            $table->foreignid('students_id')->constrained('students');
            $table->foreignId('cours_id')->constrained('courses');
            $table->foreignId('class_id')->constrained('student_class');
            $table->string('attendance_status');
            $table->string('absence_reason')->nullable();
            $table->timestamp('check_in_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prepations');
    }
};
