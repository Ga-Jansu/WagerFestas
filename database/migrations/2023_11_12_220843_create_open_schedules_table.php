<?php


use App\Models\OpenSchedule;
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
        Schema::create('open_schedules', function (Blueprint $table) {
            $table->id();
            $table->datetime('data')->unique();
            $table->enum('status', ['livre','ocupado'])->default('livre');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_schedules');
    }
};
