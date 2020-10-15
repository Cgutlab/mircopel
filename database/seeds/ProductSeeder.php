<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert(array (
            0 => array (
              'id'            => 1,
              'code'          => '001',
              'title_es'      => 'Servilletas Tissue',
              'keyword_es'    => 'Palabras Para La Búsqueda',
              'text_es'       => '<p>El papel tissue es un derivado de la celulosa con el que se consigue un papel fino y absorbente. Es un papel ideal para la fabricación de Servilletas, papel higiénico, papel de cocina, etc… Se puede fabricar de dos o tres capas obteniendo mas o menos dureza y absorbencia con cada una de estas configuraciones de capas de papel.</p>',
              'order'         => 'AA',
              'outstanding'   => 'on',
              'category_id'   => '1',
            ),
            1 => array (
              'id'            => 2,
              'code'          => '002',
              'title_es'      => 'Servilletas Decoradas de Papel',
              'keyword_es'    => 'Palabras Para La Búsqueda',
              'text_es'       => '',
              'order'         => 'BB',
              'outstanding'   => '',
              'category_id'   => '1',
            ),
            2 => array (
              'id'            => 3,
              'code'          => '003',
              'title_es'      => 'Servilletas planas',
              'keyword_es'    => 'Palabras Para La Búsqueda',
              'text_es'       => '',
              'order'         => 'CC',
              'outstanding'   => 'on',
              'category_id'   => '1',
            ),
            3 => array (
              'id'            => 4,
              'code'          => '004',
              'title_es'      => 'Servilletas Zig Zag',
              'keyword_es'    => 'Palabras Para La Búsqueda',
              'text_es'       => '',
              'order'         => 'DD',
              'outstanding'   => 'on',
              'category_id'   => '1',
            ),
            4 => array (
              'id'            => 5,
              'code'          => '005',
              'title_es'      => 'Servilletas Cocktail 25x25',
              'keyword_es'    => 'Palabras Para La Búsqueda',
              'text_es'       => '',
              'order'         => 'EE',
              'outstanding'   => 'on',
              'category_id'   => '1',
            ),
        ));

        \DB::table('products_grammages')->insert(array (
            0 => array (
              'id'          => 1,
              'product_id'  => '1',
              'grammage_id' => '1',
            ),
        ));

        \DB::table('products_sizes')->insert(array (
            0 => array (
              'id'          => 1,
              'product_id'  => '1',
              'size_id'     => '1',
            ),
        ));

        \DB::table('products_presentations')->insert(array (
            0 => array (
              'id'              => 1,
              'product_id'      => '1',
              'presentation_id' => '1',
            ),
        ));

        \DB::table('products_colors')->insert(array (
            0 => array (
              'id'            => 1,
              'product_id'    => '1',
              'color_id'      => '1',
            ),
            1 => array (
              'id'            => 2,
              'product_id'    => '1',
              'color_id'      => '2',
            ),
            2 => array (
              'id'            => 3,
              'product_id'    => '1',
              'color_id'      => '3',
            ),
            3 => array (
              'id'            => 4,
              'product_id'    => '1',
              'color_id'      => '4',
            ),
            4 => array (
              'id'            => 5,
              'product_id'    => '1',
              'color_id'      => '5',
            ),
            5 => array (
              'id'            => 6,
              'product_id'    => '1',
              'color_id'      => '6',
            ),
            6 => array (
              'id'            => 7,
              'product_id'    => '1',
              'color_id'      => '7',
            ),
            7 => array (
              'id'            => 8,
              'product_id'    => '1',
              'color_id'      => '8',
            ),
            8 => array (
              'id'            => 9,
              'product_id'    => '1',
              'color_id'      => '9',
            ),
            9 => array (
              'id'            => 10,
              'product_id'    => '1',
              'color_id'      => '10',
            ),
        ));
    }
}
