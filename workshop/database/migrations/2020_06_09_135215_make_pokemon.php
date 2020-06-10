<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakePokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table)
        {
            $table->id();
            $table->string('name')->default('pikaaaa');
            $table->integer('level')->default('10000000');
            $table->bigInteger('userid')->nullable()->unsigned();
        });

        Schema::table('pokemon' ,function (Blueprint $table){
            $table->foreign('userid')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
