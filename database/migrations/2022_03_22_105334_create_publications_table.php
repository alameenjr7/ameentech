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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->mediumText('contenu')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->foreignId('cat_id');
            $table->foreignId('child_cat_id')->nullable();
            $table->foreignId('child_lang_id')->nullable();
            $table->string('photo')->nullable();
            $table->enum('conditions', ['publier', 'future'])->default('publier');
            $table->enum('status', ['active','inactive'])->default('active');

            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('CASCADE');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
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
        Schema::dropIfExists('publications');
    }
};
