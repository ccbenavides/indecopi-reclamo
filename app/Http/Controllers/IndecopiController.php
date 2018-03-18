<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use Excel;
use App\Sancion;

class IndecopiController extends Controller
{

    public function index(){


        return view('pages/index');  
    }

    public function reclamos(){
        return view('pages/reclamos');        
    }
    
    public function sanciones(Request $request){
        $res = Sancion::where('AÑO DE RESOLUCIÓN', $request->anio)
        ->orderBy('MONTO DE MULTA (UITs)', 'DESC')
        ->limit(10)->get();
        // dd($res);
        return view('pages/sanciones')->with([
            'empresas' => $res,
            'anio' => $request->anio
        ]);
    }
    
    public function comoMejorar(){
        return view('pages/como-mejorar');        

    }

    public function buscarEmpresa(Request $request){
        if($request->tipo === "reclamo"){
            $data = \App\Reclamo::find($request->codigo);
        }else{
            $data = \App\Sancion::find($request->codigo);
            
        }
        
        $reclamos = \App\Reclamo::where('DOCUMENTO IDENTIFICACIÓN (DNI/RUC)', $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'])->get();
        $sanciones = \App\Sancion::where('DOCUMENTO IDENTIFICACIÓN (DNI/RUC)', $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'])->get();
        
        return view('pages/empresa')->with([
            'data' => $data,
            'reclamos' => $reclamos,
            'sanciones' => $sanciones
        ]);
    }

}
