<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Product::all();
        $events = Event::all();

        return response()->view('sitemap.index', [
            'posts' => $posts,
            'events' => $events,
        ])->header('Content-Type', 'text/xml');
    }

    public function products()
    {
        $products = Product::orderBy('updated_at', 'desc')->get();

        return response()->view('sitemap.products', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }

    public function events()
    {
        $events = Event::orderBy('updated_at', 'desc')->get();

        return response()->view('sitemap.events', [
            'events' => $events,
        ])->header('Content-Type', 'text/xml');
    }
}
