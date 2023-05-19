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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->longText('comments');
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
        Schema::dropIfExists('events');
    }
};
