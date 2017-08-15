<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Protocol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Protocols', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status',array('issued','delivered','canceled'))->default('issued');
            $table->string('decription')->nullable();
            $table->string('receiver')->nullable();

            $table->integer('typedocument_id')->unsigned()->nullable();
            $table->foreign('typedocument_id')->references('id')->on('TypeDocuments');

            $table->integer('annex_id')->unsigned()->nullable();
            $table->foreign('annex_id')->references('id')->on('Annexies');

            $table->integer('emitter_id')->unsigned()->nullable();
            $table->foreign('emitter_id')->references('id')->on('Functionaries');

            $table->integer('receiver_id')->unsigned()->nullable();
            $table->foreign('receiver_id')->references('id')->on('Clients');

            $table->integer('department_id')->unsigned()->nullable();
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
        Schema::dropIfExists('users');
    }
}
