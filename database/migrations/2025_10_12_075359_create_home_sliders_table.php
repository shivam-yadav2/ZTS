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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->text( 'text');
            $table->string( 'sub_text');
            $table->string('btn_text')->nullable();
            $table->string('btn_url')->nullable();
            $table->string('mobile_img')->nullable();
            $table->tinyInteger('is_active')->default(0)->comment('0 = inactive, 1 = active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};
