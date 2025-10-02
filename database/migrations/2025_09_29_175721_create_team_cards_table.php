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
        Schema::create('team_cards', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->text('description');
            $table->enum('type',['coremember','leadership','advisory']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_cards');
    }
};
