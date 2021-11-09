<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamo;

class ReclamoController extends Controller
{
    public function index()
    {
        $reclamos = Reclamo::paginate(5);
        return view('reclamos.index', compact('reclamos'));
    }

    public function create()
    {
        return view('reclamos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'motivo' =>'required',
        ]);
        Reclamo::create($request->only('name','email', 'motivo')
            );
        return redirect()->route('reclamos.index')->with('success', 'Reclamo creado correctamente');
    }

    public function show(Reclamo $reclamo)
    {
        return view('reclamos.show', compact('reclamo'));
    }

    public function edit(Reclamo $reclamo)
    {
        return view('reclamos.edit', compact('reclamo'));
    }

    public function update(Request $request, Reclamo $reclamo)
    {

        $data = $request->only('name','email','motivo');

        $reclamo->update($data);
        return redirect()->route('reclamos.index')->with('success','Reclamo actualizado correctamente');
    }

    public function destroy(Reclamo $reclamo)
    {
        $reclamo->delete();
        return back()->with('success','Reclamo eliminado correctamente');
    }
}
