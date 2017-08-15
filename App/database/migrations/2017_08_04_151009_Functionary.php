<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Functionary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Functionaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users');

            $table->integer('protocol_id')->unsigned();
            $table->foreign('protocol_id')->references('id')->on('Protocols');

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('Departments');
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
        //
    }
}
