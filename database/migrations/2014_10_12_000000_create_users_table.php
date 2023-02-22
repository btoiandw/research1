<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('employee_id')->primary()->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('pname');
            $table->string('full_name_th');
            $table->string('full_name_eng');
            $table->string('gender');
            $table->integer('organization_id');
            $table->integer('work_status'); //1=work,0=not work
            $table->string('tel');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('high_education');
            $table->string('certificate');
            $table->char('year_congrat');
            $table->string('institute_name');
            $table->string('major');
            $table->string('status_ps');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
