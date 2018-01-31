<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeaRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tea_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admNo');
            $table->date('regDate');
            $table->string('fullName');
            $table->date('bDay');
            $table->string('sex');
            $table->string('nic');
            $table->date('firstDate');
            $table->string('institute');
            $table->string('grade');
            $table->string('bestQuali');
            $table->string('proQuali');
            $table->string('wSch1');
            $table->string('wSch2');
            $table->string('wSch3');
            $table->string('pAddress');
            $table->string('tAddress');
            $table->integer('mNomber');
            $table->integer('lNomber');

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
        Schema::dropIfExists('tea_regs');
    }
}
