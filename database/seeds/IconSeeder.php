<?php

use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('icons')->insert(array (
            0 => array (
                'id'       => 1,
                'section'  => 'home',
                'image'    => 'i1.png',
                'title_es' => 'GRAN VARIEDAD Y STOCK PERMANENTE',
                'order'    => 'AA',
            ),
            1 => array (
                'id'       => 2,
                'section'  => 'home',
                'image'    => 'i2.png',
                'title_es' => 'CALIDAD GARANTIZADA',
                'order'    => 'BB',
            ),
            2 => array (
                'id'       => 3,
                'section'  => 'home',
                'image'    => 'i3.png',
                'title_es' => '40 AÑOS DE TRAYECTORIA',
                'order'    => 'CC',
            ),
        ));
    }
}
