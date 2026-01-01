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
            $table->foreignId('teachers_id')->nullable()->constrained('teachers');
            $table->foreignid('students_id')->nullable()->constrained('students');
            $table->foreignId('cours_id')->nullable()->constrained('courses');
            $table->foreignId('class_id')->nullable()->constrained('student_classes');
            $table->string('attendance_status');
            $table->string('absence_reason')->nullable();
            $table->date('attendance_date')->nullable();
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
