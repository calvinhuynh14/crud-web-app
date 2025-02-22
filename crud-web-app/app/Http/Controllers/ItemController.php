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

        $updateItemId = request()->get('updateItemId');
        $updateItem = $updateItemId ? Item::find($updateItemId) : null;
        
        return view('manage', [
            'items' => $items, 
            'showForm' => $showForm, 
            'updateItemId' => $updateItemId,
            'updateItem' => $updateItem
        ]);
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

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return redirect()->route('manage')->with('success', 'Item updated successfully');
    }
    
    public function destroy(Request $request, $id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('manage')->with('success', 'Item deleted successfully');
    }

}