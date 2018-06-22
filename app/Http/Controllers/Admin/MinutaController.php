<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Minuta;
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
        $minuta = Minuta::With_puesto()
        ->orderBy('fecha','DESC')
        ->orderBy('hora', 'DESC')
        ->paginate('5');
        
        return view('Admin.minuta.index',compact(['user','minuta']));
    }

    
    public function create()
    {
        $user = Auth::user();

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

        $minuta = Minuta::find($id);

        return view('Admin.minuta.edit',compact('user','minuta'));
    }

   
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $minuta = Minuta::find($id);

        $minuta->fill($request->all())->save();

        return redirect()->route('minuta.index')->with('info', 'Registro actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $minuta = Minuta::find($id)->delete();

        return redirect()->route('minuta.index')->with('info', 'El registro se ha eliminado');
    }
}
