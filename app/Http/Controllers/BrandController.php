<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        //dd($products);
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('brands.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {

        Brand::create($request->validated());

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brands = Brand::all();
        return view('brands.edit', compact('brand', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, string $id)
    {

        $brand = Brand::findOrFail($id);

        $brand->update($request->validated());

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
