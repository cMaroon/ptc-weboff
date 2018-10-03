<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->insert(array(
            'title' => 'SuperAdmin',
            'limit' => '1',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'ITStaff',
            'limit' => '4',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'AdminStaff',
            'limit' => '6',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'PresAdmin',
            'limit' => '1',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'VPAdmin',
            'limit' => '1',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'Guidance',
            'limit' => '2',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'CollegeSec',
            'limit' => '1',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'Cashier',
            'limit' => '1',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'Registrar',
            'limit' => '2',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'Instructor',
            'limit' => '0',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')->insert(array(
            'title' => 'Student',
            'limit' => '0',
            'used_limit' => '0',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
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
