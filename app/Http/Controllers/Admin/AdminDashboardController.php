<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Eventscat;
use App\Models\Product;
use App\Models\product_images;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AdminDashboardController extends Controller
{
    public function edit($id)
{
    $product = Product::with('images')->findOrFail($id);
    return view('admin.product.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Update product info
    $product->update([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'condition' => $request->condition,
        'status' => $request->status,
    ]);

    // Delete selected images
    if ($request->has('delete_images')) {
        foreach ($request->delete_images as $image_id) {
            $image = product_images::find($image_id);
            if ($image) {
                @unlink(public_path($image->image_path));
                $image->delete();
            }
        }
    }

    // Upload new images
    if ($request->hasFile('photo')) {
        foreach ($request->file('photo') as $image_one) {
            $manager = new ImageManager(new Driver());
            $image_one_name = hexdec(uniqid()) . '.' . strtolower($image_one->getClientOriginalExtension());
            $image = $manager->read($image_one);
            $final_image_path = 'uploads/images/' . $image_one_name;
            $image->save(public_path($final_image_path));

            product_images::create([
                'product_id' => $product->id,
                'image_path' => $final_image_path,
            ]);
        }
    }

    return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!');
}


    public function category(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
        ]);
        $category = new Category;
        $category->category = $request->category;
        $category->save();
        return redirect()->back()->with('status', 'Category added successfully!');
    }
    public function categoryIndex(Request $request)
    {

          $brands = Eventscat::all();
        $category = Category::all();
        return view('admin.category.index', compact('category','brands'));
    }
    public function product()
    {
        $products = Product::all();
        return view('admin.product.index')->with('products', $products);
    }

    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('admin.product.show', compact('product'));
}

    public function productcreate()
    {
        $category = Category::all();
        return view('admin.product.create')->with('category', $category);
    }
 // make sure this model exists

public function productStore(Request $request)
{
    // Validate request
   // ✅ Step 1: Validate input
    $request->validate([
        'title' => 'required|string',
        'description' => 'nullable|string',
        'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        'price' => 'required|numeric',
        // Add any other required validations
    ]);

    // ✅ Step 2: Generate slug
    $slug = Str::slug($request->title);
    $count = Product::where('slug', $slug)->count();
    if ($count > 0) {
        $slug .= '-' . date('ymdis') . '-' . rand(0, 999);
    }

    // ✅ Step 3: Prepare main product data (excluding photos for now)
    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'condition' => $request->condition ?? 'default',
        'status' => 'inactive',
        'slug' => $slug,
        // 'is_featured' => $request->input('is_featured', 0),
        'size' => is_array($request->size) ? implode(',', $request->size) : $request->size,
        'photo' => null // placeholder
    ];

    // ✅ Step 4: Save the product (we need its ID for images)
    $product = Product::create($data);

    // ✅ Step 5: Handle image uploads
    if ($request->hasFile('photo')) {
        $manager = new ImageManager(new Driver());
        foreach ($request->file('photo') as $index => $imageFile) {
            $imageName = hexdec(uniqid()) . '.' . strtolower($imageFile->getClientOriginalExtension());
            $image = $manager->read($imageFile);
            $finalPath = 'uploads/images/' . $imageName;
            $image->save(public_path($finalPath));

            // Save main photo to 'photo' column
            if ($index === 0) {
                $product->photo = $finalPath;
                $product->save();
            }

            // Save image to product_images table
            product_images::create([
                'product_id' => $product->id,
                'image_path' => $finalPath,
            ]);
        }
    }

    // ✅ Step 6: Flash message and redirect
    if ($product) {
        $request->session()->flash('success', 'Product successfully added to Market place');
    } else {
        $request->session()->flash('error', 'Please try again!!');
    }

    return redirect()->route('admin.dashboard');
}
  
    public function index()
    {
        return view('admin.dashboard');
    }
    public function adminfunction() {}
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if admin exists
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session()->put('is_admin_logged_in', true);
            session()->put('admin', $admin); // ✅ Store full Admin model

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // expects password_confirmation field
        ]);

        // Create admin user
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        // Optionally log them in
        auth()->login($admin);

        // Redirect to admin dashboard
        return redirect()->route('admin.dashboard')->with('success', 'Admin registered successfully.');
    }
}
