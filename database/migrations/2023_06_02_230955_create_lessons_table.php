<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('weekday');
            $table->time('start_time');
            $table->time('end_time');
            $table->longText('comments')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $table->foreignId('group_id')->constrained('groupes')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
