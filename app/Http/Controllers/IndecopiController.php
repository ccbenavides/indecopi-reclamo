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
        
        $reclamos = \App\Reclamo::where('DOCUMENTO IDENTIFICACIÓN (DNI/RUC)', $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'])
                        ->limit(30)->get();
        $sanciones = \App\Sancion::where('DOCUMENTO IDENTIFICACIÓN (DNI/RUC)', $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'])
                        ->limit(30)->get();


        $empresa = \App\Empresa::where('RECURRENTE', $this->quitar_tildes(trim($data['PROVEEDOR (RAZÓN SOCIAL)'])) )->first();
        
        return view('pages/empresa')->with([
            'data' => $data,
            'reclamos' => $reclamos,
            'sanciones' => $sanciones,
            'empresa' => $empresa
        ]);
    }

    public function mapa(){
        return view('pages/mapa');
    }

    public function quitar_tildes($cadena) {
        $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
        $texto = str_replace($no_permitidas, $permitidas ,$cadena);
        return $texto;
    }
}
