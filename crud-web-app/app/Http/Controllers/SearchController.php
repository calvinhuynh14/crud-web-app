<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function showSearch()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $low = $request->input('low');
        $high = $request->input('high');

        $query = DB::table('items');

        if ($searchTerm) {
            $query->where(function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('product_code', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($low && $high) {
            $query->whereBetween('price', [$low, $high]);
        }
        elseif ($low) {
            $query->where('price', '>=', $low);
        }
        elseif ($high) {
            $query->where('price', '<=', $high);
        }

        $items = $query->get();
        return view('search', ['items' => $items]);
    }
    
}
?>

