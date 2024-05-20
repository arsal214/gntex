<?php

namespace App\Http\Controllers;

use App\Models\Cartoon;
use Illuminate\Http\Request;


/**
 * Class cartoonController
 * @package App\Http\Controllers
 */
class CartoonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartoons = Cartoon::get();

        return view('content.cartoon.index', compact('cartoons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cartoon = new Cartoon();
        return view('content.cartoon.create', compact('cartoon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Cartoon::$rules);
        Cartoon::create($request->all());
        return redirect()->route('cartoons.index')
            ->with('success', 'cartoon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cartoon = Cartoon::find($id);

        return view('content.cartoon.show', compact('cartoon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cartoon = Cartoon::find($id);

        return view('content.cartoon.edit', compact('cartoon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cartoon $cartoon)
    {
        $cartoon->update($request->validated());

        return redirect()->route('cartoons.index')
            ->with('success', 'cartoon updated successfully');
    }

    public function destroy($id)
    {
        Cartoon::find($id)->delete();

        return redirect()->route('cartoons.index')
            ->with('success', 'cartoon deleted successfully');
    }
}

