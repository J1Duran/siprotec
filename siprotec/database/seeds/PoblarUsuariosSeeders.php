<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/06/15
 * Time: 03:23 AM
 */

class PoblarUsuariosSeeders extends \Illuminate\Database\Seeder{
    public function run(){
        \DB::table('usuarios')->insert(array (
            'name' => 'Alonso',
            'cedula' => '20840287',
            'password' => \Hash::make('secret'),
            'cargo' => '1',
            'email' => 'Alonso@e.uneg',
            'id_area' => '1',
            'id_gerencia' => '1',
            'id_grupo' => '1'
        ));
    }

}