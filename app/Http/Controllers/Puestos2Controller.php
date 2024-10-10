<?php

namespace App\Http\Controllers;

use App\Models\Puestos2;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Puestos2Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class Puestos2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $puestos2s = Puestos2::paginate();

        return view('puestos2.index', compact('puestos2s'))
            ->with('i', ($request->input('page', 1) - 1) * $puestos2s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $puestos2 = new Puestos2();

        return view('puestos2.create', compact('puestos2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Puestos2Request $request): RedirectResponse
    {
        Puestos2::create($request->validated());

        return Redirect::route('puestos2s.index')
            ->with('success', 'Puestos2 created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $puestos2 = Puestos2::find($id);

        return view('puestos2.show', compact('puestos2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $puestos2 = Puestos2::find($id);

        return view('puestos2.edit', compact('puestos2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Puestos2Request $request, Puestos2 $puestos2): RedirectResponse
    {
        $puestos2->update($request->validated());

        return Redirect::route('puestos2s.index')
            ->with('success', 'Puestos2 updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Puestos2::find($id)->delete();

        return Redirect::route('puestos2s.index')
            ->with('success', 'Puestos2 deleted successfully');
    }
}
