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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo2')->nullable();
            $table->string('favicon2')->nullable();
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('fax')->nullable();
            $table->string('adresse');
            $table->string('lot')->nullable();
            $table->string('appartement')->nullable();
            $table->string('footer')->nullable();
            $table->string('background_footer')->nullable();
            $table->string('image_footer')->nullable();
            $table->string('background_header')->nullable();
            $table->string('text_abonnement')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->text('map_url')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
