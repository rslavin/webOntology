<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relations', function(Blueprint $table){
            $table->string('lhs_name');
            $table->string('rhs_name');
            $table->dropColumn('long_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relations', function(Blueprint $table){
            $table->dropColumn('lhs_name');
            $table->dropColumn('rhs_name');
            $table->string('long_name');
        });
    }
}
