<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Visitante;

class VisitanteController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles(['user','admin']);
        $rol = $user->getRol();
        $visitantes = Visitante::orderBy('fecha','DESC')
        ->orderBy('entrada','DESC')
        ->paginate('30');

        return view('Admin.visitantes.index',compact('user','rol','visitantes'));
    }

    
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles(['user']);
        $rol = $user->getRol();

        return view('Admin.visitantes.create',compact('user','rol'));
    }

    
    public function store(Request $request)
    {
        $minuta = Visitante::create($request->all());

        return redirect()->route('visitantes.index')->with('info', 'Registro guardado con éxito');
    }

    
    public function show($id)
    {
        $user = Auth::user();
        $user->authorizeRoles(['user','admin']);
        $rol = $user->getRol();

        $visitante = Visitante::find($id);

        return view('Admin.visitantes.show',compact('user','rol','visitante'));
    }

    
    public function edit($id)
    {

        $user = Auth::user();
        $user->authorizeRoles(['admin']);
        $rol = $user->getRol();

        $visitante = Visitante::find($id);

        return view('Admin.visitantes.edit',compact('user','rol','visitante'));
    }

   
    public function update(Request $request, $id)
    {
       
        $user = Auth::user();
        $user->authorizeRoles(['admin']);

        $visitante = Visitante::find($id);
        $visitante->fill($request->except(['estado','salida']))->save();

        return redirect()->route('visitantes.index')->with('info', 'Registro actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $visitante = Visitante::find($id)->delete();

        $user->authorizeRoles(['admin']);

        return redirect()->route('visitantes.index')->with('info', 'El registro se ha eliminado');
    }

    public function salida(Request $request)
    {
        $user = Auth::user();
        $user->authorizeRoles(['user']);

        $visitante = Visitante::find($request['id']);
        $visitante->salida = now();
        $visitante->estado = 'OUT';
        $visitante->save();
        
        return redirect()->route('visitantes.index')->with('info', 'Salida de visitante registrada');
    }
}
