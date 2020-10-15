<?php

use Illuminate\Database\Seeder;

class GrammageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grammages')->insert(array (
            0 => array (
              'id'          => 1,
              'title_es'    => '55-60g/m2',
              'order'       => 'AA',
              'category_id' => 1,
            ),
        ));
    }
}
