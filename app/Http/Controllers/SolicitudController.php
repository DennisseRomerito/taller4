<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes = DB::table('solicitud')->get();
        return view('solicitudes.index', ['solicitudes' => $solicitudes]);
    }

    public function create()
    {
        return view('solicitudes.new');

    }

    public function store(Request $request)
    {
        Solicitud::create($request->all());
        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud creada satisfactoriamente.');
    }

    public function show(Solicitud $solicitud)
    {
        return view('solicitudes.show', compact('solicitud'));
    }

    public function edit($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        return view('solicitudes.update', compact('solicitud'));

    }

    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->update($request->all());

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud actualizada correctamente.');
    }

    public function destroy($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud eliminada correctamente.');
    }
}
