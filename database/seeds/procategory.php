<?php

use Illuminate\Database\Seeder;

class Procategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procategories')->insert(array(
            array(
            'cate_title' => 'Dairy & Fresh Panee',
            'parent_id' => '0',
            'cate_desc' => 'World Class Infant Nutrition<br>By Milk Baby Dairy',
            'slug' => 'dairy-&-fresh-panee',
            'image' => '90618464.png',
            'status' => '1', ),
            array(
                'cate_title' => 'Fresh Chakki Aatta',
                'parent_id' => '0',
                'cate_desc' => 'World Class Infant Nutrition<br>By Milk Baby Dairy',
                'slug' => 'fresh-chakki-aatta',
                'image' => '34125818.png',
                'status' => '1', ),
            array(
                'cate_title' => 'Fresh Fruits',
                'parent_id' => '0',
                'cate_desc' => 'World Class Infant Nutrition<br>By Milk Baby Dairy',
                'slug' => 'fresh-fruits',
                'image' => '96060480.png',
                'status' => '1', ),
            array(
                'cate_title' => 'Fresh Vegetables',
                'parent_id' => '0',
                'cate_desc' => 'World Class Infant Nutrition<br>By Milk Baby Dairy',
                'slug' => 'fresh-vegetables',
                'image' => '40430921.png',
                'status' => '1', ),
            array(
                'cate_title' => 'Glucose',
                'parent_id' => '0',
                'cate_desc' => 'World Class Infant Nutrition<br>By Milk Baby Dairy',
                'slug' => 'glucose',
                'image' => '52947923.png',
                'status' => '1', )
        
        ));
    }
}
