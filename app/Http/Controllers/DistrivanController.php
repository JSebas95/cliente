<?php

namespace distrivan\Http\Controllers;

use Illuminate\Http\Request;

use Emprendimiento\Http\Requests;
use Emprendimiento\Distrivan;
use Emprendimiento\Marca;
use Emprendimiento\Modelo;
use Emprendimiento\Cilindraje;


use Illuminate\Support\Fecades\Redirect;
use Emprendimiento\Http\Requests\MarcaFormRequest;
use Emprendimiento\Http\Requests\DistrivanFormRequest;
use Emprendimiento\Http\Requests\ModeloFormRequest;
use Emprendimiento\Http\Requests\CilindrajeFormRequest;
use DB;



class DistrivanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $tipov=DB::table('tipo_vehiculo as tv')->orderBy('idtv','desc')->paginate(10);
            
            //->select('tv.nombre as nombre','mv.marca_vehiculo as marca','tv.idtv as id')
           
			$marca=DB::table('marca_vehiculo as mv')
            ->orderBy('idmv','asc')
            ->paginate(10);          
            $modelo=DB::table('modelo')->orderBy('idmodelo','desc')->paginate(20);
            $cilindraje=DB::table('cilindraje')->orderBy('idcilindraje','desc')->paginate(10);
			return view('inicio.distrivan.index',["tipov"=>$tipov,"marca"=>$marca,"modelo"=>$modelo,"cilindraje"=>$cilindraje,"searchText"=>$query]);
    	}
    }

    public function create(){
        return view('almacen.articulo.create',["categorias"=>$categorias]);

    }
    //Es la funcion que almacena en la base de datos
    public function store(ArticuloFormRequest $request){
        return Redirect::to('almacen/articulo');


    }

    public function show($id){
        return view('almacen.articulo.show',["articulo"=>Articulo::findOrFail($id)]);

    }

    public function edit($id){
        return view('almacen.articulo.edit',["articulo"=>$articulo, "categoria"=>$categorias]);
    }

    public function update(ArticuloFormRequest $request, $id){
        return Redirect::to('almacen/articulo');

    }

    public function destroy($id){
        return Redirect::to('inicio/distrivan');
    }
}
