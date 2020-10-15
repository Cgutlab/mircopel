<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert(array(
          0 =>
          array (
            'id'       => 1,
            'code'     => '01',
            'image'    => '01.jpg',
            'title_es' => 'SERVILLETAS',
            'order'    => 'AA',
          ),
          1 =>
          array (
            'id'       => 2,
            'code'     => '02',
            'image'    => '02.jpg',
            'title_es' => 'MANTELES INDIVIDUALES',
            'order'    => 'BB',
          ),
          2 =>
          array (
            'id'       => 3,
            'code'     => '03',
            'image'    => '03.jpg',
            'title_es' => 'HIGIENE INSTITUCIONAL',
            'order'    => 'CC',
          ),
          3 =>
          array (
            'id'       => 4,
            'code'     => '04',
            'image'    => '04.jpg',
            'title_es' => 'CAJAS DE TORTA, BOMBONES Y MASAS FINAS',
            'order'    => 'DD',
          ),
          4 =>
          array (
            'id'       => 5,
            'code'     => '05',
            'image'    => '05.jpg',
            'title_es' => 'RESMAS',
            'order'    => 'EE',
          ),
          5 =>
          array (
            'id'       => 6,
            'code'     => '06',
            'image'    => '06.jpg',
            'title_es' => 'BANDEJAS DE CARTÓN',
            'order'    => 'FF',
          ),
          6 =>
          array (
            'id'       => 7,
            'code'     => '07',
            'image'    => '07.jpg',
            'title_es' => 'PLATOS DORADOS',
            'order'    => 'FF',
          ),
          7 =>
          array (
            'id'       => 8,
            'code'     => '08',
            'image'    => '08.jpg',
            'title_es' => 'PAPEL',
            'order'    => 'FF',
          ),
        ));
    }
}
