<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array(
            'title' => 'Diamond Halo Stud Earrings 12',
            'url' => 'diamond-halo-stud-earrings-12',
            'discount' => '20',
            'stock' => '20',
            'discount_type' => '%',
            'cate_id' => '1',
            'pro_desc' => 'diamond-halo-stud-earrings-12',
            'price' => '900',
            'image' => '[{"image_name":"95094299.jpg","image_order":"1"},{"image_name":"45132269.jpg","image_order":"2"}]',
            'status' => '1',
            'featured' => '1'),
            array(
                'title' => 'Diamond Halo Stud Earrings 13',
                'url' => 'diamond-halo-stud-earrings-13',
                'discount' => '20',
                'stock' => '20',
                'discount_type' => '%',
                'cate_id' => '1',
                'pro_desc' => 'diamond-halo-stud-earrings-12',
                'price' => '900',
                'image' => '[{"image_name":"95094299.jpg","image_order":"1"},{"image_name":"45132269.jpg","image_order":"2"}]',
                'status' => '1',
                'featured' => '1'),
            array(
                'title' => 'Diamond Halo Stud Earrings 14',
                'url' => 'diamond-halo-stud-earrings-14',
                'discount' => '20',
                'stock' => '20',
                'discount_type' => '%',
                'cate_id' => '1',
                'pro_desc' => 'diamond-halo-stud-earrings-12',
                'price' => '900',
                'image' => '[{"image_name":"95094299.jpg","image_order":"1"},{"image_name":"45132269.jpg","image_order":"2"}]',
                'status' => '1',
                'featured' => '1'),
            array(
                'title' => 'Diamond Halo Stud Earrings 15',
                'url' => 'diamond-halo-stud-earrings-15',
                'discount' => '20',
                'stock' => '20',
                'discount_type' => '%',
                'cate_id' => '2',
                'pro_desc' => 'diamond-halo-stud-earrings-12',
                'price' => '900',
                'image' => '[{"image_name":"95094299.jpg","image_order":"1"},{"image_name":"45132269.jpg","image_order":"2"}]',
                'status' => '1',
                'featured' => '1'),
        ));
    }
}
