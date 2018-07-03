<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Elemento;
use App\Tipo_elemento;
use Auth;

class ElementoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = Auth::user();
        $rol = $user->getRol();
        $user->authorizeRoles(['user','admin']);

        $elementos = Elemento::orderBy('fecha_entrada')
        ->orderBy('hora_entrada')
        ->where('puesto_id',$user->puesto_id)
        ->paginate('5');

        return view('Admin.elementos.index',compact('user','rol','elementos'));
    }

    
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles(['user']);
        $rol = $user->getRol();
        $tipos = Tipo_elemento::orderBy('nombre')->pluck('nombre', 'id');
        return view('Admin.elementos.create',compact('user','rol','tipos'));
    }

    
    public function store(Request $request)
    {
        $elemento = Elemento::create($request->all());

        return redirect()->route('elementos.index')->with('info', 'Registro guardado con éxito');
    }

    
    public function show($id)
    {
        $user = Auth::user();
        $user->authorizeRoles(['user']);
        $rol = $user->getRol();

        $elemento = Elemento::find($id);
        return view('Admin.elementos.show',compact('user','rol','elemento'));
    }

    
    public function edit($id)
    {
        $user = Auth::user();
        $user->authorizeRoles(['user','admin']);
        $rol = $user->getRol();

        $tipos = Tipo_elemento::orderBy('nombre')->pluck('nombre', 'id');
        $elemento = Elemento::find($id);
        return view('Admin.elementos.edit',compact('user','rol','elemento','tipos'));
    }

    
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $user->authorizeRoles(['admin','user']);

        $elemento = Elemento::find($id);
        $elemento->fill($request->except(['estado','hora_salida','fecha_salida']))->save();

        return redirect()->route('elementos.index')->with('info', 'Registro actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $elemento = Elemento::find($id)->delete();

        $user->authorizeRoles(['admin']);

        return redirect()->route('elementos.index')->with('info', 'El registro se ha eliminado');
    }

    public function salida(Request $request)
    {
        $user = Auth::user();
        $user->authorizeRoles(['user']);

        $elemento = Elemento::find($request['id']);
        $elemento->fecha_salida = now();
        $elemento->hora_salida  = now();
        $elemento->estado = 'OUT';
        $elemento->save();
        
        return redirect()->route('elementos.index')->with('info', 'Salida de elemento registrada');
    }
}
