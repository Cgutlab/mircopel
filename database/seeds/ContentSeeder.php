<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contents')->insert(array (
            0 =>
            array (
              'id'       => 1,
              'section'  => 'empresa',
              'type'     => 'content-left',
              'order'    => 'AA',
              'image1'   => 'empresa1.jpg',
              'image2'   => 'empresa2.jpg',
              'image3'   => 'empresa3.jpg',
              'title_es' => 'EMPRESA',
              'text_es'  => '<p>Mircopel es una empresa familiar dedicada a la conversión de papel. Fabricamos servilletas en diversos formatos, manteles individuales impresos, productos para la higiene institucional, papel seda liso e impreso, papel para embalaje en resmas y bobinas en sus diferentes tamaños y gramajes. Además comercializamos directo de fábrica resmas Duplituc y Tempo en todas sus variedades.</p><p>Tenemos a disposición de nuestros clientes un equipo de profesionales que están en constante perfeccionamiento para poder brindar el mejor servicio del mercado. Con una visión sustentada en el esfuerzo, acercamos a cada cliente soluciones pensadas exclusivamente para su necesidad.</p><p>Llevamos operando en éste sector más de 40 años y gozamos de una reputación construida con honestidad y compromiso</p>'
            ),
        ));
    }
}
