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

class PaseController extends Controller {
    public function index(){
        return view('pase');
    }
    public function store(Request $request){
        $pase = new Pase($request->all());
        $pase->save();

    }


}