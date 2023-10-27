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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('number');
            $table->string('dob');
            $table->string('blood');
            $table->string('gender');
            $table->string('nationality')->nullable();
            $table->string('religion');
            $table->string('division');
            $table->string('district');
            $table->string('address');
            $table->string('guardian_name');
            $table->string('guardian_number');
            $table->string('class_id');
            $table->string('pre_school_name')->nullable();
            $table->string('src_input')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
