<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use Excel;
class IndecopiController extends Controller
{

    public function index(){


        return view('pages/index');  
    }

    public function reclamos(){
        return view('pages/reclamos');        
    }
    
    public function sanciones(){
        return view('pages/sanciones');        
        
    }
    
    public function comoMejorar(){
        return view('pages/como-mejorar');        

    }

}
