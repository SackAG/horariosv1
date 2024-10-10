<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EjemploRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ejemplos = Ejemplo::paginate();

        return view('ejemplo.index', compact('ejemplos'))
            ->with('i', ($request->input('page', 1) - 1) * $ejemplos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ejemplo = new Ejemplo();

        return view('ejemplo.create', compact('ejemplo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EjemploRequest $request): RedirectResponse
    {
        Ejemplo::create($request->validated());

        return Redirect::route('ejemplos.index')
            ->with('success', 'Ejemplo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ejemplo = Ejemplo::find($id);

        return view('ejemplo.show', compact('ejemplo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ejemplo = Ejemplo::find($id);

        return view('ejemplo.edit', compact('ejemplo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EjemploRequest $request, Ejemplo $ejemplo): RedirectResponse
    {
        $ejemplo->update($request->validated());

        return Redirect::route('ejemplos.index')
            ->with('success', 'Ejemplo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Ejemplo::find($id)->delete();

        return Redirect::route('ejemplos.index')
            ->with('success', 'Ejemplo deleted successfully');
    }
}
