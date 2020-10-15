<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //protected $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

     public function run()
     {
         \DB::table('admins')->insert(array (
             0 =>
             array (
                 'id'       => 1,
                 //'cod'      => substr(str_shuffle($this->charset),1,20),
                 //'image'    => 'no-image.jpg',
                 'type'     => 'admin',
                 'status'   => 'on',
                 'name'     => 'Pablo',
                 'username' => 'pablo',
                 'password' => bcrypt('pablopablo'),
             ),
             1 =>
             array (
                 'id'       => 2,
                 //'cod'      => substr(str_shuffle($this->charset),1,20),
                 //'image'    => '',
                 'type'     => 'user',
                 'status'   => 'on',
                 'name'     => 'Carlos',
                 'username' => 'carlos',
                 'password' => bcrypt('carlos'),
             ),
         ));
     }
}
