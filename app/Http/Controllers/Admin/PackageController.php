<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Package::all();
        return view('admin.package.index',
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
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
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
            $getImage = $this->image_upload($file,'uploads/package');
            $blog['image'] = 'package/' . $getImage;
        }
        $data = Package::create($blog);
        if ($data){
            return redirect()->route('packages.index')->with('success', 'Great! You have successfully created a Blog.');
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
        $dataShow = Package::find($id);
        return view('admin.package.show',
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
        $dataEdit = Package::find($id);
        return view('admin.package.edit',
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
            $getImage = $this->image_upload($file,'uploads/package');
            $blodStore['image'] = 'package/' . $getImage;
        }
        Package::where('id',$id)->update($blodStore);
        if ($blodStore) {
            return redirect()->route('packages.index')->with('success', 'Great! You have successfully update  Blog.');
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
        $data = Package::find($id);
        $data->delete($data);
        return redirect()->route('packages.index')->with('success', 'Great! You have successfully Dalete Blog.');
    }
}
