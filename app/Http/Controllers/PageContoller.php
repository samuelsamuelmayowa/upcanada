<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
// use Auth;
// use Session;

class PageContoller extends Controller
{
    //
    public function events(){
          $product = Product::all();
        $category =  Category::all();
        $events = Event::all();
         return view('frontend.pages.events', compact('product', 'category', 'events'));
    }

    public function marketPlace(){
         $product = Product::all();
        $category =  Category::all();
        $events = Event::all();
         return view('frontend.pages.marketplace', compact('product', 'category', 'events'));
    }

     public function aboutus(){
        $product = Product::all();
        $category =  Category::all();
        $events = Event::all();
         return view('frontend.pages.aboutus', compact('product', 'category', 'events'));
    }




    public function genreal_home()
    {
        $product = Product::all();
        $category =  Category::all();
        $events = Event::all();
        return view('frontend.pages.home', compact('product', 'category', 'events'));
    }
    public function login()
    {
        $product = Product::all();
        $category =  Category::all();
        return view('frontend.pages.login', compact('product', 'category'));
    }
    public function loginSubmit(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {
            Session::put('user', $data['email']);
            request()->session()->flash('success', 'Successfully login');
            return redirect()->route('dashboard');
        } else {
            request()->session()->flash('error', 'Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }
    public function registerSubmit(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        // dd($data);
        $check = $this->create($data);
        Session::put('user', $data['email']);
        if ($check) {
            request()->session()->flash('success', 'Successfully registered');
            return redirect()->route('home');
        } else {
            request()->session()->flash('error', 'Please try again!');
            return back();
        }
    }
}
