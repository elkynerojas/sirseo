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

        $visitantes = Visitante::orderBy('fecha','DESC')
        ->orderBy('entrada','DESC')
        ->paginate('5');

        return view('Admin.visitantes.index',compact('user','visitantes'));
    }

    
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles(['user','admin']);

        return view('Admin.visitantes.create',compact('user'));
    }

    
    public function store(Request $request)
    {
        $minuta = Visitante::create($request->all());

        return redirect()->route('visitantes.index')->with('info', 'Registro guardado con éxito');
    }

    
    public function show($id)
    {
        $user = Auth::user();

        $visitante = Visitante::find($id);

        return view('Admin.visitantes.show',compact('user','visitante'));
    }

    
    public function edit($id)
    {
        $user = Auth::user();

        $visitante = Visitante::find($id);

        return view('Admin.visitantes.edit',compact('user','visitante'));
    }

   
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $visitante = Visitante::find($id);

        $visitante->fill($request->all())->save();

        return redirect()->route('visitantes.index')->with('info', 'Registro actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $visitante = Visitante::find($id)->delete();

        return redirect()->route('visitantes.index')->with('info', 'El registro se ha eliminado');
    }
}
