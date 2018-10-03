<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSuperadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'role_id' => '1',
            'name' => 'SuperAdmin',
            'email' => 'superadmin@ptc-edu.ph',
            'password' => Hash::make('admin'),
            'active' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('roles')
            ->where('id', '1')
            ->update(array('used_limit' => '1'));
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
