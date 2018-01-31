<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create6CClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('6_c_classes', function (Blueprint $table) {
          $table->date('year');
          $table->string('student');
          $table->string('section');
          $table->double('religion1stTerm');
          $table->double('sinhala1stTerm');
          $table->double('maths1stTerm');
          $table->double('seince1stTerm');
          $table->double('english1stTerm');
          $table->double('history1stTerm');
          $table->double('geography1stTerm');
          $table->double('citizenStudy1stTerm');
          $table->double('it1stTerm');
          $table->double('esthetics1stTerm');
          $table->double('health1stTerm');
          $table->double('tamil1stTerm');
          $table->double('practicalTechnology1stTerm');
          $table->double('totelMarks1stTerm');
          $table->double('avg1stTerm');
          $table->integer('rank1stTerm');


          $table->double('religion2ndTerm');
          $table->double('sinhala2ndTerm');
          $table->double('maths2ndTerm');
          $table->double('seince2ndTerm');
          $table->double('english2ndTerm');
          $table->double('history2ndTerm');
          $table->double('geography2ndTerm');
          $table->double('citizenStudy2ndTerm');
          $table->double('it2ndTerm');
          $table->double('esthetics2ndTerm');
          $table->double('health2ndTerm');
          $table->double('tamil2ndTerm');
          $table->double('practicalTechnology2ndTerm');
          $table->double('totelMarks2ndTerm');
          $table->double('avg2ndTerm');
          $table->integer('rank2ndTerm');

          $table->double('religion3rdTerm');
          $table->double('sinhala3rdTerm');
          $table->double('maths3rdTerm');
          $table->double('seince3rdTerm');
          $table->double('english3rdTerm');
          $table->double('history3rdTerm');
          $table->double('geography3rdTerm');
          $table->double('citizenStudy3rdTerm');
          $table->double('it3rdTerm');
          $table->double('esthetics3rdTerm');
          $table->double('health3rdTerm');
          $table->double('tamil3rdTerm');
          $table->double('practicalTechnology3rdTerm');
          $table->double('totelMarks3rdTerm');
          $table->double('avg3rdTerm');
          $table->integer('rank3rdTerm');
          
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
        Schema::dropIfExists('6_c_classes');
    }
}
