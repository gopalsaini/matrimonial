<?php


use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Hash::make('admin');
        DB::table('users')->insert(array(
            array(
                "name"=>'admin',
                "email"=>'admin@gmail.com',
                "mobile"=>'9988552266',
                "status"=>'1',
                "user_type"=>'2',
                "password"=>$pass ),
            array(
                "name"=>'user',
                "email"=>'user@gmail.com',
                "mobile"=>'8899663355',
                "status"=>'1',
                "user_type"=>'1',
                "password"=>$pass, )
        
        ));
    }
}


