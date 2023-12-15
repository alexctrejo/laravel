<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Agregamos la referencia al Log

class CitaController extends Controller
{
    public function index()
    {
        // Obtener solo las citas del usuario autenticado
        $userId = auth()->id();
        $citas = Cita::where('user_id', $userId)->get();

        return view('citas.index', ['citas' => $citas]);
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'carrera' => 'required',
            'numero_control' => 'required',
            'fecha' => 'required',
            'asunto' => 'required',
        ]);

        $cita = new Cita();
        $cita->nombre = $request->nombre;
        $cita->correo = $request->correo;
        $cita->carrera = $request->carrera;
        $cita->numero_control = $request->numero_control;
        $cita->fecha = $request->fecha;
        $cita->asunto = $request->asunto;
        $cita->user_id = Auth::id();

        if ($cita->save()) {
            Log::info("Cita creada exitosamente. ID: {$cita->id}");
            return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente');
        } else {
            Log::error("Error al intentar guardar la cita.");
            return redirect()->route('citas.create')->with('error', 'Error al intentar guardar la cita');
        }
    }

    // Resto del código del controlador...

}
