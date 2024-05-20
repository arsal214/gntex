<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;


/**
 * Class sizeController
 * @package App\Http\Controllers
 */
class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::get();

        return view('content.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $size = new Size();
        return view('content.size.create', compact('size'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Size::$rules);
        Size::create($request->all());
        return redirect()->route('sizes.index')
            ->with('success', 'size created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $size = Size::find($id);

        return view('content.size.show', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $size = Size::find($id);

        return view('content.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        $size->update($request->validated());

        return redirect()->route('sizes.index')
            ->with('success', 'Size updated successfully');
    }

    public function destroy($id)
    {
        Size::find($id)->delete();

        return redirect()->route('sizes.index')
            ->with('success', 'Size deleted successfully');
    }
}
