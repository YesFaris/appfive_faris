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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 255);
            $table->string('civility', 50);
            $table->string('statut')->default('en attente');
            $table->string('first_name', 70);
            $table->string('last_name',70);
            $table->string('birth', 10);
            $table->string('nationality', 30);
            $table->string('identify_document', 50);
            $table->string('document_number', 50);
            $table->string('email', 100);
            $table->string('adress', 150);
            $table->string('city', 50);
            $table->string('district',50);
            $table->string('phone', 15);
            $table->string('phone2',15)->nullable();
            $table->string('rules',4 );
            $table->string('consent',4);
            $table->string('id_profil', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
