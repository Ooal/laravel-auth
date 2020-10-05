<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employees', function (Blueprint $table) {
        $table->foreign('location_id', 'emp_loc') -> references('id') -> on('locations');
      });

      Schema::table('employee_task', function (Blueprint $table) {
        $table->foreign('employee_id', 'tas_emp') -> references('id') -> on('employees') -> onDelete('cascade');
        $table->foreign('task_id', 'emp_tas') -> references('id') -> on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employees', function (Blueprint $table) {
        $table->dropForeign('emp_loc');
      });

      Schema::table('employee_task', function (Blueprint $table) {
        $table->dropForeign('tas_emp');
        $table->dropForeign('emp_tas');
      });
    }
}
