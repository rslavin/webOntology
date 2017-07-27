<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOntTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_root')->default(0);
        });

        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('short_name');
            $table->string('long_name');
        });

        Schema::create('relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lhs_id')->unsigned();
            $table->foreign('lhs_id')->references('id')->on('nodes')->onDelete('cascade');
            $table->integer('rhs_id')->unsigned();
            $table->foreign('rhs_id')->references('id')->on('nodes')->onDelete('cascade');
            $table->integer('relation_id')->unsigned();
            $table->foreign('relation_id')->references('id')->on('relations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('nodes');
        Schema::dropIfExists('relations');
        Schema::dropIfExists('relationships');
        Schema::enableForeignKeyConstraints();
    }
}
