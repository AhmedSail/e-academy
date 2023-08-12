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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->double('price', 5 , 2);
            $table->string('duration');
            $table->text('content');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers','id')->nullOnDelete();//in laravel 10 the way for forign id ('table_name','column_name') that is make referance between them
            //if company has employee and leave that company that not must't delete the course but mean fetch another one but to avoid error must be nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
