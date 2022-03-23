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
        Schema::create('realisation_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('realisation_id');
            $table->tinyInteger('rate')->default(0);
            $table->string('full_name');
            $table->string('email');
            $table->text('review');
            $table->enum('status',['active','inactive'])->default('active');

            $table->foreign('realisation_id')->references('id')->on('realisations')->onDelete('CASCADE');
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
        Schema::dropIfExists('realisation_reviews');
    }
};
