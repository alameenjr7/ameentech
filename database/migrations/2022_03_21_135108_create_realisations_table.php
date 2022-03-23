<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('photo');
            $table->longText('contenu');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('language_id');
            $table->foreignId('child_cat_id')->nullable();
            $table->foreignId('child_lang_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->enum('condition',['terminer', 'en_cours', 'future'])->default('terminer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisations');
    }
};
