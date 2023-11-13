<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index',
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
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesRequest $request)
    {
        $blog = [
            'title' => $request->input('title'),
            'slug' => str::slug ($request->title),
            'meta_title' => $request->input('meta_title'),
            'seo_keyword' => $request->input('seo_keyword'),
            'description' => $request->input('description'),
            'meta_description' => $request->input('meta_description'),
        ];
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $getImage = $this->image_upload($file,'uploads/service');
            $blog['image'] = 'service/' . $getImage;
        }
        $data = Service::create($blog);
        if ($data){
            return redirect()->route('services.index')->with('success', 'Great! You have successfully created a Blog.');
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
        $dataShow = Service::find($id);
        return view('admin.services.show',
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
        $dataEdit = Service::find($id);
        return view('admin.services.edit',
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
            $getImage = $this->image_upload($file,'uploads/services');
            $blodStore['image'] = 'services/' . $getImage;
        }
        Service::where('id',$id)->update($blodStore);
        if ($blodStore) {
            return redirect()->route('services.index')->with('success', 'Great! You have successfully update  Blog.');
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
        $data = Service::find($id);
        $data->delete($data);
        return redirect()->route('services.index')->with('success', 'Great! You have successfully Dalete Blog.');
    }
}
