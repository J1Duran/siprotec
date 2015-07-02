<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/06/15
 * Time: 11:27 PM
 */

namespace siprotec\Http\Controllers;





use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use siprotec\Pase;
use siprotec\objeto;


class PaseController extends Controller {
    public function pasescreados()
    {
        return view('pasescreados');
    }

    public function index(){
        return view('pase');
    }
    public function store(Request $request){

        if(Input::get('pase')) {
            $pase = new Pase($request->all());
            $pase->save();
        } elseif(Input::get('objeto')) {
            $pase = new objeto($request->all());
            $pase->save();

        }


    }



}