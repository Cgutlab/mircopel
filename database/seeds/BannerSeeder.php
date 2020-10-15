<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banners')->insert(array (
            0 =>
            array (
                'id'          => 1,
                'section'     => 'home',
                'type'        => 'right',
                'order'       => 'AA',
                'image'       => 'b1.jpg',
                'title_es'    => 'SOLICITÁ PRESUPUESTO',
                'subtitle_es' => 'de manera rápida y sin costo',
                'button_es'   => 'SOLICITAR PRESUPUESTO',
                'route'       => 'solicitar-presupuesto',
            ),
        ));
    }
}
