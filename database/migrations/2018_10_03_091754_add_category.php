<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('category')->insert(array(
            'title' => 'News',
            'color' => 'badge-success',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('category')->insert(array(
            'title' => 'Event',
            'color' => 'badge-warning',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('category')->insert(array(
            'title' => 'Guide',
            'color' => 'badge-info',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')

        ));
        DB::table('category')->insert(array(
            'title' => 'Announcement',
            'color' => 'badge-danger',
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
