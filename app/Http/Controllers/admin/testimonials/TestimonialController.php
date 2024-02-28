<?php

namespace App\Http\Controllers\admin\testimonials;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['testimonials'] = Testimonials::get();
        return view('admin.testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'position' => 'required',
        ]);
        $data = $request->only('text', 'title', 'position', 'image');
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('testimonials')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = random_int(100000, 999999) . '-' . $slug;
        }
        $data['slug'] = $slug;
        if (!empty($data['image'])) {
            $db_image = time() . rand(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->storeAs("public/TestiImage", $db_image);
            $data['image'] = $db_image;
        }
        $data['created_at'] = date('Y-m-d H:i:s');

        $insert =  DB::table('testimonials')->insert($data);
        if ($insert) {
            return redirect()->route('testimonials.index')->with('msg', 'Testimonials created successfully');
        } else {
            return back()->with('msg', 'Some error occur!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $data['testimonial'] =  DB::table('testimonials')->where('slug', $slug)->first();
        return view('admin.testimonial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $blog = Testimonials::where('slug', $slug)->firstOrFail();
        $data = $request->only('image', 'title', 'text', 'position');
        if (!empty($data['image'])) {
            File::delete(public_path("storage/TestiImage/" . $blog->image));
            $db_image = time() . rand(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->storeAs("public/TestiImage", $db_image);
            $data['image'] = $db_image;
        }
        $data['updated_at'] = date('Y-m-d H:i:s');

        $upd =  $blog->update($data);
        if($upd) {
            return redirect()->route('testimonials.index')->with('msg', 'Testimonials updated successfully');
        } else {
            return back()->with('msg', 'Some error occur!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $del = Testimonials::where('slug', $slug)->firstOrFail()->delete();
        if ($del) {
            return back()->with('msg', 'Testimonial has been deleted successfully');
        } else {
            return back()->with('msg', 'Some error ocur');
        }
    }
}
