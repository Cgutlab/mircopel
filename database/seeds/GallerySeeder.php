<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('galleries')->insert(array (
            0 =>
            array (
              'id'         => 1,
              'image'      => '001_1.jpg',
              'order'      => 'AA',
              'product_id' => '1',
            ),
            1 =>
            array (
              'id'         => 2,
              'image'      => '002_1.jpg',
              'order'      => 'AA',
              'product_id' => '2',
            ),
            2 =>
            array (
              'id'         => 3,
              'image'      => '003_1.jpg',
              'order'      => 'AA',
              'product_id' => '3',
            ),
            3 =>
            array (
              'id'         => 4,
              'image'      => '004_1.jpg',
              'order'      => 'AA',
              'product_id' => '4',
            ),
            4 =>
            array (
              'id'         => 5,
              'image'      => '005_1.jpg',
              'order'      => 'AA',
              'product_id' => '5',
            ),
            5 =>
            array (
              'id'         => 6,
              'image'      => '001_2.jpg',
              'order'      => 'BB',
              'product_id' => '1',
            ),
            6 =>
            array (
              'id'         => 7,
              'image'      => '001_3.jpg',
              'order'      => 'CC',
              'product_id' => '1',
            ),
        ));
    }
}
