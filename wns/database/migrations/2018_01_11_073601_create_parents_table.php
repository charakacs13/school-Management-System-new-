<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admNo');
            $table->string('fName');
            $table->string('fAddress');
            $table->string('fJobAddress');
            $table->string('fEmail');
            $table->string('fMNo');
            $table->double('fJobNo');
            $table->string('mName');
            $table->string('mAddress');
            $table->string('mJobAddress');
            $table->string('mEmail');
            $table->string('mMNo');
            $table->double('mJobNo');
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
        Schema::dropIfExists('parents');
    }
}
