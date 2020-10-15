<?php

use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('presentations')->insert(array (
            0 => array (
              'id'          => 1,
              'title_es'    => '4, 6 Y 18 (con y sin guarda)',
              'order'       => 'AA',
              'category_id' => 1,
            ),
        ));
    }
}
