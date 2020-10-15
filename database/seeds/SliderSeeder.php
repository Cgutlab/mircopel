<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sliders')->insert(array (
            0 => array (
              'id'          => 1,
              'section'     => 'home',
              'type'        => 'title-center',
              'image'       => 's1.jpg',
              'order'       => 'AA',
              'title_es'    => 'EXCELENCIA EN SERVICIO',
              'subtitle_es' => 'calidad y tiempo',
            ),
            1 => array (
              'id'          => 2,
              'section'     => 'empresa',
              'type'        => 'title-center',
              'image'       => 's2.jpg',
              'order'       => 'AA',
              'title_es'    => '40 AÑOS DE TRAYECTORIA',
              'subtitle_es' => 'acompañando a la industria papelera',
            ),
        ));
    }
}
