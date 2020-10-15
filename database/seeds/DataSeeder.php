<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('data')->insert(array (
            0 =>
            array (
              'id'    => 1,
              'type'  => 'info-direccion1',
              'text'  => 'Esteban Merlo 5894',
              'route' => 'Esteban Merlo 5894, Caseros - Prov. de Buenos Aires',
            ),
            1 =>
            array (
              'id'    => 2,
              'type'  => 'info-direccion2',
              'text'  => 'Caseros - Prov. de Buenos Aires',
              'route' => 'Esteban Merlo 5894, Caseros - Prov. de Buenos Aires',
            ),
            2 =>
            array (
              'id'    => 3,
              'type'  => 'info-telefono1',
              'text'  => '011 5195 - 6848',
              'route' => '+5401151956848',
            ),
            3 =>
            array (
              'id'    => 4,
              'type'  => 'info-telefono2',
              'text'  => '011 5195 - 6849',
              'route' => '+5401151956849',
            ),
            4 =>
            array (
              'id'    => 5,
              'type'  => 'info-correo',
              'text'  => 'consultas@papeleramircopel.com',
              'route' => 'consultas@papeleramircopel.com',
            ),
            5 =>
            array (
              'id'    => 6,
              'type'  => 'header-telefono',
              'text'  => '011 5195 - 6848 / 011 5195 - 6849',
              'route' => '+5401151956848',
            ),
            6 =>
            array (
              'id'    => 7,
              'type'  => 'header-correo',
              'text'  => 'consultas@papeleramircopel.com',
              'route' => 'consultas@papeleramircopel.com',
            ),
            7 =>
            array (
              'id'    => 8,
              'type'  => 'contacto-mapa',
              'text'  => 'api-google',
              'route' => '#',
            ),
            8 =>
            array (
              'id'    => 9,
              'type'  => 'contacto-informacion',
              'text'  => 'Términos y condiciones de privacidad...',
              'route' => 'Términos y condiciones de privacidad...',
            ),
        ));
    }
}
