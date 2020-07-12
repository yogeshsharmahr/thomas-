<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [ 'name' => 'Anju',
            'email' =>'anju110@gmail.com',
            'is_admin'=>'2',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'juli',
            'email' =>'juli@gmail.com',
            'is_admin'=>'3',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'Anju',
            'email' =>'anju@gmail.com',
            'is_admin'=>'2',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'Ankit',
            'email' =>'Ankit@gmail.com',
            'is_admin'=>'3',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'Arju',
            'email' =>'Arju@gmail.com',
            'is_admin'=>'2',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'Harender',
            'email' =>'harender@gmail.com',
            'is_admin'=>'3',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'Suneel',
            'email' =>'Suneel@gmail.com',
            'is_admin'=>'2',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
            [ 'name' => 'meenu',
            'email' =>'neenu@gmail.com',
            'is_admin'=>'3',
            'password' => Hash::make('12345678'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),],
        ]);
    }
}
