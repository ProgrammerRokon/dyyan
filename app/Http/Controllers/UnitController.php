<?php

namespace App\Http\Controllers;

use App\Models\Unit; //////add  unit model
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::orderBy('id', 'desc')->paginate(10);
        return view('backend.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ],[
            'name.required' => 'First Name is ..'
        ]);

        Unit::create($request->all());

        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::findOrFail($id);

        return view('backend.unit.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Unit::findOrFail($id);
        return view('backend.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ],[
            'name.required' => 'First Name is ..'
        ]);
        $unit = Unit::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('unit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();
        return redirect()->back();

    }
}
