<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->insert(array (
            0 =>
            array (
                'id'       => 1,
                'cod'      => 'FFFFFF',
                'title_es' => 'Blanco',
            ),
            1 =>
            array (
                'id'       => 2,
                'cod'      => 'FA8072',
                'title_es' => 'Salmón',
            ),
            2 =>
            array (
                'id'       => 3,
                'cod'      => 'FFFF00',
                'title_es' => 'Amarillo',
            ),
            3 =>
            array (
                'id'       => 4,
                'cod'      => 'FF0000',
                'title_es' => 'Rojo',
            ),
            4 =>
            array (
                'id'       => 5,
                'cod'      => '808840',
                'title_es' => 'Bordó',
            ),
            5 =>
            array (
                'id'       => 6,
                'cod'      => '0000FF',
                'title_es' => 'Azul',
            ),
            6 =>
            array (
                'id'       => 7,
                'cod'      => '00FF00',
                'title_es' => 'Verde',
            ),
            7 =>
            array (
                'id'       => 8,
                'cod'      => '6c4675',
                'title_es' => 'Lila',
            ),
            8 =>
            array (
                'id'       => 9,
                'cod'      => '000000',
                'title_es' => 'Negro',
            ),
            9 =>
            array (
                'id'       => 10,
                'cod'      => '9C9C9C',
                'title_es' => 'Gris',
            ),
        ));
    }
}
