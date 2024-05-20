<?php

namespace App\Http\Controllers;

use App\Models\ProductConstruction;
use Illuminate\Http\Request;


/**
 * Class ColorController
 * @package App\Http\Controllers
 */
class ProductConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productConstructions = ProductConstruction::get();

        return view('content.productConstruction.index', compact('productConstructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productConstruction = new ProductConstruction();
        return view('content.productConstruction.create', compact('productConstruction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(ProductConstruction::$rules);
        ProductConstruction::create($request->all());
        return redirect()->route('product-constructions.index')
            ->with('success', 'Product Constructions created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productConstruction = ProductConstruction::find($id);

        return view('content.productConstruction.edit', compact('productConstruction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductConstruction $productConstruction)
    {
        $productConstruction->update($request->validated());

        return redirect()->route('product-constructions.index')
            ->with('success', 'Product Construction updated successfully');
    }

    public function destroy($id)
    {
        ProductConstruction::find($id)->delete();

        return redirect()->route('product-constructions.index')
            ->with('success', 'Product Construction deleted successfully');
    }
}
