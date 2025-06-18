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
            $table->char('npm', 8)->unique();
            $table->string('name');
            $table->string('birth_place')->nullable();
            $table->date('birth_date');
            $table->string('gender', 2)->nullable();
            $table->text('address')->nullable();
            $table->string('faculty')->nullable();
            $table->string('major')->nullable();
            $table->decimal('gpa', 3, 2)->default(1.00);
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
