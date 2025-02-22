<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $showForm = request()->showForm ?? false;
        return view('manage', ['items' => $items, 'showForm' => $showForm]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'product_code' => 'required|unique:items',
            'price' => 'required',
        ]);

        Item::create($request->all());
        return redirect()->route('manage')->with('success', 'Item created successfully');
    }
}