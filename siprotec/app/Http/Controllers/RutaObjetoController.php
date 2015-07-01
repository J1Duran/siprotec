<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/06/15
 * Time: 02:16 AM
 */

namespace siprotec\Http\Controllers;


class RutaObjetoController extends Controller {
    public function index()
    {
        return view('ruta_objetos_originales');
    }
}