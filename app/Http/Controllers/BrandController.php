<?php

namespace App\Http\Controllers;

use App\Models\Brand; //////add  brand model
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $brand = new Brand();
        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->save();

        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$brand = Brand::where('id', $id)->first();

        $brand = Brand::findOrFail($id);

        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->all();

        $brand = Brand::findOrFail($id);
        $brand->update($requestData);

        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Brand::where('id', $id)->first();
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->back();
        //
    }
}
