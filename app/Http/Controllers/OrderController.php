<?php

namespace App\Http\Controllers;

use App\Models\Cartoon;
use App\Models\Category;
use App\Models\Color;
use App\Models\Order;
use App\Models\Packing;
use App\Models\ProductConstruction;
use App\Models\Size;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

/**
 * Class ColorController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::get();

        return view('content.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $order = new Order();
        $cartoons = Cartoon::pluck('name', 'id');
        $categories = Category::pluck('category', 'id');
        $colors = Color::pluck('name', 'id');
        $packings = Packing::pluck('name', 'id');
        $constructions = ProductConstruction::pluck('name', 'id');
        $suppliers = Supplier::pluck('po_id', 'id');
        $sizes = Size::pluck('name', 'id');

        $order['po_id'] = $this->poID();
        return view('content.order.create',
            compact('categories', 'order', 'cartoons', 'colors', 'constructions',
                'packings', 'suppliers', 'sizes'));
    }


    public function poID()
    {
        $latestOrder = Order::orderBy('id', 'desc')->first();
        $lastPoid = $latestOrder ? $latestOrder->po_id : 'GN-0000';
        // Extract the number from the POID and increment it
        $number = (int)substr($lastPoid, 3);
        $newNumber = $number + 1;

        $newPoid = 'GN-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
        return $newPoid;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Order::$rules);
        Order::create($request->all());
        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Order::find($id);

        return view('content.order.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $cartoons = Cartoon::pluck('name', 'id');
        $categories = Category::pluck('category', 'id');
        $colors = Color::pluck('name', 'id');
        $packings = Packing::pluck('name', 'id');
        $constructions = ProductConstruction::pluck('name', 'id');
        $suppliers = Supplier::pluck('po_id', 'id');
        $sizes = Size::pluck('name', 'id');
        return view('content.order.create',
            compact('categories', 'order', 'cartoons', 'colors', 'constructions',
                'packings', 'suppliers', 'sizes'));

        return view('content.order.edit',
            compact('categories', 'order', 'cartoons', 'colors', 'constructions',
                'packings', 'suppliers', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->validated());

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        Order::find($id)->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully');
    }

    public function pdf()
    {
        $orders = Order::get();
        $pdf = Pdf::loadView('content.order.pdf', compact('orders'));
        return $pdf->download('disney.pdf');
    }
}
