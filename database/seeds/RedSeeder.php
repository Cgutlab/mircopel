<?php

use Illuminate\Database\Seeder;

class RedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reds')->insert(array (
            0 =>
            array (
              'id'       => 1,
              'section'  => 'footer',
              'order'    => 'AA',
              'icon'     => 'fab fa-facebook-square',
              'route'    => 'https://www.facebook.com',
              'image'    => '',
            ),
        ));
    }

}
