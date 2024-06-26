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
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titolo')->unique();
            $table->text('descrizione');
            $table->string('area_interesse');
            $table->string('paese_interesse');
            $table->string('citta_interesse');
            $table->string('provincia_interesse');
            $table->string('img_url');
            $table->string('status');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('dec_maker_id');
            $table->foreign('dec_maker_id')->references('id')->on('decmakers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petitions');
    }
};
