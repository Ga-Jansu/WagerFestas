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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name_birthdayperson', 255);
            $table->string('years_birthdayperson', 255);
            $table->integer('qnt_invited');
            $table->dateTime('date');
            $table->enum('status', ['analise','aprovado','rejeitado','finalizado'])->default('analise');
            $table->foreignId('open_schedule_id')->constrained(
                table: 'open_schedules', indexName: 'bookings_open_schedule_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'bookings_user_id'
            );;
            $table->foreignId('food_id')->constrained(
                table: 'food', indexName: 'bookings_food_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

