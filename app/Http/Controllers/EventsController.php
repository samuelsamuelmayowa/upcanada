<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Eventscat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
class EventsController extends Controller
{

   public function subevent($id)
{
    $event= Event::find($id);
$category = Category::all();
    if (!$event) {
        return view('frontend.pages.home');   
    }

    return view('frontend.pages.subevent', compact('event','category'));   
}


    public function category(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
        ]);
        $category = new Eventscat;
        $category->eventcat = $request->brand;
        $category->save();
        return redirect()->back()->with('status', 'Event Category  added successfully!');
    }
    public function categoryIndex(Request $request){
        $brand = Eventscat::all();
        return view('admin.category.index', compact('brand'));
    }


    public function edit($id)
{
    $product = Event::with('images')->findOrFail($id);
    return view('admin.product.edit', compact('product'));
}

public function update(Request $request, $id){
    $product = Event::findOrFail($id);

    // Update product info
    $product->update([
        'name' => $request->title,
        'start_date='>$request->start_date,
        'end_date'=>$request->end_date,
        'location'=>$request->location,
        'organizer'=>$request->organizer,
        'hours'=>$request->hours,
        'eventinfo' => $request->eventinfo,
        'category' => $request->category,
    ]);

    // Delete selected images
    if ($request->has('delete_images')) {
        foreach ($request->delete_images as $image_id) {
            $image = Event::find($image_id);
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

            Event::create([
                // '' => $product->id,
                'photo' => $final_image_path,
            ]);
        }
    }

    return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!');
}

      public function events()
    {
        $events = Event::all();
        return view('admin.events.index')->with('events', $events);
    }
     public function eventscreate()
    {
        $category = Category::all();
        $eventcat = Eventscat::all();
        return view('admin.events.create')->with( 'eventcat', $eventcat);
    }

    public function eventstore(Request $request)
{
    // ✅ Step 1: Validate input
    $request->validate([
        'name' => 'required|string',
        'eventinfo' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
    ]);

    // ✅ Step 2: Generate slug
    $slug = Str::slug($request->name);
    $count = Event::where('slug', $slug)->count();
    if ($count > 0) {
        $slug .= '-' . date('ymdis') . '-' . rand(0, 999);
    }

    // ✅ Step 3: Prepare base data
    $data = [
        'name' => $request->name,
        'contact_email'=>$request-> contact_email,
        'eventinfo' => $request->eventinfo,
        'slug' => $request->slug,
          'start_date'>$request->start_date,
        'end_date'=>$request->end_date,
        'location'=>$request->location,
        'organizer'=>$request->organizer,
        'hours'=>$request->hours,
        'category'=>$request->cat_id,
        'photo' => null,
    ];

    // ✅ Step 4: Handle image upload if available
    if ($request->hasFile('photo')) {
        $imageFile = $request->file('photo');
        $manager = new ImageManager(new Driver());

        $imageName = hexdec(uniqid()) . '.' . strtolower($imageFile->getClientOriginalExtension());
        $image = $manager->read($imageFile);
        $finalPath = 'uploads/images/' . $imageName;
        $image->save(public_path($finalPath));

        $data['photo'] = $finalPath;
    }

    // ✅ Step 5: Create Event with photo
    $event = Event::create($data);

    // ✅ Step 6: Flash message and redirect
    if ($event) {
        $request->session()->flash('success', 'Event successfully added');
    } else {
        $request->session()->flash('error', 'Please try again!');
    }

    return redirect()->route('admin.dashboard');
}
}
