<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class rolesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert(array(
     array(
       'slug' => 'admin',
       'role' => 'admin',
     ),
     array(
       'slug' => 'teacher',
       'role' => 'teacher',
     ),
      array(
       'slug' => 'student',
       'role' => 'student',
     ),
   ));
    }
}
