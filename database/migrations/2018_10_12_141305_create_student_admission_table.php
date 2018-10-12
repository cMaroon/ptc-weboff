<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('student_admission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admission_refno',100)->unique();
            $table->string('fname',100);
            $table->string('mname',100);
            $table->string('lname',100);
            $table->string('sname',4);
            $table->string('program');
            $table->string('scholarship');
            $table->string('admit_type');
            $table->string('year_level');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('citizenship',100)->nullable();
            $table->string('birthplace',100)->nullable();
            $table->string('religion',100)->nullable();
            $table->date('dob');
            $table->string('ca_st_num',100)->nullable();
            $table->string('ca_st_name',100)->nullable();
            $table->string('ca_subd',100)->nullable();
            $table->string('ca_brgy',100)->nullable();
            $table->string('ca_city',100)->nullable();
            $table->string('ca_province',100)->nullable();
            $table->integer('ca_zipcode');
            $table->string('per_st_num',100)->nullable();
            $table->string('per_st_name',100)->nullable();
            $table->string('per_subd',100)->nullable();
            $table->string('per_brgy',100)->nullable();
            $table->string('per_city',100)->nullable();
            $table->string('per_province',100)->nullable();
            $table->integer('per_zipcode');
            $table->integer('cd_telno');
            $table->integer('cd_mobno');
            $table->string('cd_email',100)->unique();
            $table->string('lsa_schtype',100)->nullable();
            $table->string('lsa_schname',100)->nullable();
            $table->string('lsa_schprogram',100)->nullable();
            $table->date('lsa_schattended');
            $table->string('fa_fname',100)->nullable();
            $table->string('fa_mname',100)->nullable();
            $table->string('fa_lname',100)->nullable();
            $table->string('fa_sname',4)->nullable();
            $table->integer('fa_mobno');
            $table->string('fa_email',100)->unique();
            $table->string('fa_occu',100)->nullable();
            $table->string('mo_fname',100)->nullable();
            $table->string('mo_mname',100)->nullable();
            $table->string('mo_lname',100)->nullable();
            $table->integer('mo_mobno');
            $table->string('mo_email',100)->unique();
            $table->string('mo_occu',100)->nullable();  
            $table->string('gu_fname',100)->nullable();
            $table->string('gu_mname',100)->nullable();
            $table->string('gu_lname',100)->nullable();
            $table->string('gu_sname',4)->nullable();
            $table->integer('gu_mobno');
            $table->string('gu_email',100)->unique();
            $table->string('gu_occu',100)->nullable();                 
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
        Schema::dropIfExists('student_admission');
    }
}
