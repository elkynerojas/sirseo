<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Minuta;
use App\User;
use Auth;

class MinutaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles(['user','admin']);
       
        $minuta = Minuta::orderBy('fecha','DESC')
        ->orderBy('hora','DESC')
        ->where('puesto_id',$user->puesto_id)
        ->paginate('5');
        return view('Admin.minuta.index',compact(['user','minuta']));
    }

    
    public function create()
    {

        $user = Auth::user();
        $user->authorizeRoles(['user']);
        return view('Admin.minuta.create',compact('user'));
    }

    
    public function store(Request $request)
    {
        $minuta = Minuta::create($request->all());

        return redirect()->route('minuta.index')->with('info', 'Registro guardado con éxito');
    }

    
    public function show($id)
    {
        $user = Auth::user();

        $minuta = Minuta::find($id);

        return view('Admin.minuta.show',compact('user','minuta'));
    }

    
    public function edit($id)
    {
        
        $user = Auth::user();
        $user->authorizeRoles(['user']);
        $minuta = Minuta::find($id);
        if($minuta->user_id != $user->id){
          abort(403, 'Esta acción no está autorizada');
        }
        return view('Admin.minuta.edit',compact('user','minuta'));  
    }

   
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $minuta = Minuta::find($id);

        $minuta->fill($request->except(['hora','fecha']))->save();

        return redirect()->route('minuta.index')->with('info', 'Registro actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $user = Auth::user();
        $minuta = Minuta::find($id);
        if($minuta->user_id != $user->id){
            abort(403, 'Esta acción no está autorizada.');
        }
        $minuta->delete();
        return redirect()->route('minuta.index')->with('info', 'El registro se ha eliminado');
    }
}
