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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('paese_residenza');
            $table->string('comune_residenza');
            $table->string('provincia_residenza');
            $table->string('citta_residenza');
            $table->string('indirizzo_residenza');
            $table->integer('cap_residenza');
            $table->string('num_civico');
            $table->string('cellulare');
            $table->string('img_url');
            $table->string('status');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
