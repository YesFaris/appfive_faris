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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',255);
            $table->string('statut',11);
            $table->datetime('date_time_rate');
            $table->string('step_rate', 11)->nullable();
            $table->foreignId('folder_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('step_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('admin_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assessment_id')->cascadeOnDelete()->cascadeOnUpdate();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
