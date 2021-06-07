<?php

use Illuminate\Database\Seeder;

class Newsletter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert(array(
            array(
                'email' => 'gopalsaini459@gmail.com'),
            array(
                'email' => 'gopalsaini.img@gmail.com'),
            array(
                'email' => 'gopalsaini7742@gmail.com')
        
        ));
    }
}
