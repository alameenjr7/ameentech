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
        Schema::table('realisations', function (Blueprint $table) {
            //
            $table
            ->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table
            ->foreign('client_id')
            ->references('id')
            ->on('clients')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table
            ->foreign('child_cat_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('SET NULL')
            ->onDelete('SET NULL');

            $table
            ->foreign('language_id')
            ->references('id')
            ->on('languages')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realisations', function (Blueprint $table) {
            //
            $table->dropForeign(['categorie_id','client_id', 'child_cat_id', 'language_id']);
        });
    }
};
