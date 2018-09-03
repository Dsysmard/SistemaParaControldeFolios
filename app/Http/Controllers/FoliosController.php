<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folio as Folio;

class FoliosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
         $folios= Folio::where('num_folio','like','%'.$request->num_folio.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('folios.index',compact('folio'));
    }

    public function index()
    {
        $folios = Folio::all();
        return \View::make('folios.index', compact('folios'));
    }

    public function create()
    {
        return \View::make('folios.create');
    }

    public function store(Request $request)
    {
        $folios = new Folio;

        $folios->num_folio = $request->num_folio;
        $folios->nombre_creador = $request->nombre_creador;
        $folios->nom_departamento_emitido = $request->nom_departamento_emitido;
        $folios->nom_dependecia_dirigido = $request->nom_dependecia_dirigido;

        
        $folios->save();

        return redirect('/folios');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $folios = Folio::find($id);
        return view ('folios.update',["folios" => $folios]);
    }

    public function update(Request $request, $id)
    {
        $folios = Folio::find($id);;

        $folios->id_municipio = $request->id_municipio;
        $folios->nombremunicipio = $request->nombremunicipio;
        
        if($folios->save())
        {
            return redirect("/desarrollosocial/folios");
        }
        else{
            return view("desarrollosocial/folios.edit", ["folios" => $folios]);
        }
    }

    public function destroy($id)
    {
        $folios = Folio::find($id);
        $folios->delete();
        return redirect()->back();
    }
}
