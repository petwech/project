<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_id');
            $table->string('fname');
            $table->string('id_no');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('dob');
            $table->string('contact1');
            $table->string('contact2')->nullable();
            $table->string('email');
            $table->string('nationality');
            $table->string('photo')->nullable();
            $table->char('department');
            $table->char('designation');
            $table->string('emp_type');
            $table->string('emp_date');
            $table->string('start_salary')->nullable();
            $table->string('status');
            $table->string('kra')->nullable();
            $table->string('nssf')->nullable();
            $table->string('nhif')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_no')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
