<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = $request->input('q');

        $products = Product::where('title', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->get();

        $events = Event::where('name', 'LIKE', "%$query%")
            ->orWhere('eventinfo', 'LIKE', "%$query%")
            ->get();

        $category = Category::all();


        return view('frontend.pages.search_results', compact('query', 'products', 'events','category'));
    }
}
