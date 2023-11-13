<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::all();
        return view('admin.testimonial.index',
        compact('data')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
        $blog = [
            'title' => $request->input('title'),
            'slug' => str::slug ($request->title),
            'rating' => $request->input('rating'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
        ];
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $getImage = $this->image_upload($file,'uploads/testimonial');
            $blog['image'] = 'testimonial/' . $getImage;
        }
        $data = Testimonial::create($blog);
        if ($data){
            return redirect()->route('testimonial.index')->with('success', 'Great! You have successfully created a Blog.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataShow = Testimonial::find($id);
        return view('admin.testimonial.show',
        compact('dataShow')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataEdit = Testimonial::find($id);
        return view('admin.testimonial.edit',
        compact('dataEdit',)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blodStore = $request ->except([
            '_token',
            '_method',
            'previous_image',
            'image',
        ]);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $getImage = $this->image_upload($file,'uploads/testimonial');
            $blodStore['image'] = 'testimonial/' . $getImage;
        }
        Testimonial::where('id',$id)->update($blodStore);
        if ($blodStore) {
            return redirect()->route('testimonial.index')->with('success', 'Great! You have successfully update  Blog.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Testimonial::find($id);
        $data->delete($data);
        return redirect()->route('testimonial.index')->with('success', 'Great! You have successfully Dalete Blog.');
    }
}
