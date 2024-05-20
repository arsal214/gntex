<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;


/**
 * Class supplierController
 * @package App\Http\Controllers
 */
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::get();

        return view('content.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = new Supplier();
        return view('content.supplier.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Supplier::$rules);
        Supplier::create($request->all());
        return redirect()->route('suppliers.index')
            ->with('success', 'supplier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = supplier::find($id);

        return view('content.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('content.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update($request->validated());

        return redirect()->route('suppliers.index')
            ->with('success', 'supplier updated successfully');
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();

        return redirect()->route('suppliers.index')
            ->with('success', 'supplier deleted successfully');
    }
}
