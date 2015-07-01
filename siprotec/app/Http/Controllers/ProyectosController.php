<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/06/15
 * Time: 11:34 AM
 */

namespace siprotec\Http\Controllers;


class ProyectosController extends Controller {
    public function index()
    {
        return view('proyectos');
    }


}