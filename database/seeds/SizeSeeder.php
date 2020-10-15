<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sizes')->insert(array (
            0 => array (
              'id'          => 1,
              'title_es'    => 'Servilletas de 33 x 33 cm',
              'order'       => 'AA',
              'category_id' => 1,
            ),
        ));
    }
}
