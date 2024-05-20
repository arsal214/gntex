<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;


/**
 * Class ColorController
 * @package App\Http\Controllers
 */
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::get();

        return view('content.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $color = new Color();
        return view('content.color.create', compact('color'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Color::$rules);
        Color::create($request->all());
        return redirect()->route('colors.index')
            ->with('success', 'Color created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $color = Color::find($id);

        return view('content.color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $color = Color::find($id);

        return view('content.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $color->update($request->validated());

        return redirect()->route('colors.index')
            ->with('success', 'Color updated successfully');
    }

    public function destroy($id)
    {
        Color::find($id)->delete();

        return redirect()->route('colors.index')
            ->with('success', 'Color deleted successfully');
    }
}
