<?php

namespace App\Http\Controllers;

use App\Models\Packing;
use Illuminate\Http\Request;


/**
 * Class PackingController
 * @package App\Http\Controllers
 */
class PackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packings = Packing::get();

        return view('content.packing.index', compact('packings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packing = new Packing();
        return view('content.packing.create', compact('packing'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Packing::$rules);
        Packing::create($request->all());
        return redirect()->route('packings.index')
            ->with('success', 'packing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $packing = Packing::find($id);

        return view('content.packing.show', compact('packing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $packing = Packing::find($id);

        return view('content.packing.edit', compact('packing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packing $packing)
    {
        $packing->update($request->validated());

        return redirect()->route('packings.index')
            ->with('success', 'Packing updated successfully');
    }

    public function destroy($id)
    {
        Packing::find($id)->delete();

        return redirect()->route('packings.index')
            ->with('success', 'packing deleted successfully');
    }
}

