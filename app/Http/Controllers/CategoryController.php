<?php

namespace App\Http\Controllers;

use App\Models\Category;//////add  category model
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->image;
        if ($file) {
            $extention = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extention;
            $file->move('images', $fileName);
            $path = '/images/' . $fileName;
        } else {
            $path = null;
        }


        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->image = $path;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$category = Category::where('id', $id)->first();

        $category = Category::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->except('image');

        $file = $request->image;
        if ($file) {
            $extention = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extention;
            $file->move('images', $fileName);
            $path = '/images/' . $fileName;
            $requestData['image'] = $path;
        }


        $category = Category::findOrFail($id);
        $category->update($requestData);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Category::where('id', $id)->first();
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back();
        //
    }
}
