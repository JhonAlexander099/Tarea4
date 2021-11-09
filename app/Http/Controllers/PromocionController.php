<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocion;

class PromocionController extends Controller
{
    public function index()
    {
        $promocions = Promocion::paginate(5);
        return view('promocions.index', compact('promocions'));
    }

    public function create()
    {
        return view('promocions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' =>'required',
        ]);
        Promocion::create($request->only('name', 'descripcion')
            );
        return redirect()->route('promocions.index')->with('success', 'Promocion creado correctamente');
    }

    public function show(Promocion $promocion)
    {
        return view('promocions.show', compact('promocion'));
    }

    public function edit(Promocion $promocion)
    {
        return view('promocions.edit', compact('promocion'));
    }

    public function update(Request $request, Promocion $promocion)
    {
        $data = $request->only('name','descripcion');

        $promocion->update($data);
        return redirect()->route('promocions.index')->with('success','Promocion actualizado correctamente');
    }

    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
        return back()->with('success','Promocion eliminado correctamente');
    }
}
