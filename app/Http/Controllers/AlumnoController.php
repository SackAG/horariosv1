<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::get();
        //return view('alumnos/index',['alumnos'=>$alumno]);
        return view('alumnos2/index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accion = 'C';
        $alumnos = Alumno::get();
        $alumno = new Alumno;
        $txtbtn = 'Guardar';
        return view('alumnos2.form',compact('alumnos','alumno','accion','txtbtn'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'Nombre' => 'required|min:2',
            'Email' => 'required'
        ]);
        // Alumno::create($request->all());
        // return redirect()->route('alumnos.index');
    //     $nombre = $request->input('Nombre');
    // $correo = $request->input('Email');
        // $request->validate([
            // 'nombre' => 'required|string|max:255',
            // 'correo' => 'required|email|unique:usuarios',
        // ]);
        Alumno::create($val);
        return redirect()->route('alumnos.index')->with('mensaje','se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::get();
        $accion = 'D';
        $txtbtn = 'confirmar la eliminacion';
        $des = 'disabled';
        return view('alumnos2.ver', compact('alumnos','alumno','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {   
        $alumnos = Alumno::get();
        $accion = 'E';
        $txtbtn = 'actualizar';
        return view('alumnos2.form', compact('alumnos','alumno','accion','txtbtn'));
    }

    /**
     * Update the specified resource in storage.    
     */
    public function update(Request $request, Alumno $alumno)
    {
        //aqui se actualizaran los datos
        $val = $request->validate([
            'Nombre' => 'required|min:2',
            'Email' => 'required'
        ]);
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
