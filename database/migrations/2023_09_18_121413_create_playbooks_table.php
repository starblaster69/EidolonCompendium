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
        Schema::create('playbooks', function (Blueprint $table) {
            $table->integer('id');
            $table->tinyInteger('edition');
            $table->string('playbook_name', 100);
            $table->string('ability_phrase', 100);
            $table->string('resonant_effect', 100);
            $table->string('dissonant_effect', 100);
            $table->integer('starter_moves_id');
            $table->integer('advanced_moves_id');
            $table->integer('master_moves_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playbooks');
    }
};
