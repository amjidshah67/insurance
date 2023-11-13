<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index',
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
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
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
            $getImage = $this->image_upload($file,'uploads/blog');
            $blog['image'] = 'blog/' . $getImage;
        }
        $data = Blog::create($blog);
        if ($data){
            return redirect()->route('blogs.index')->with('success', 'Great! You have successfully created a Blog.');
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
        $dataShow = Blog::find($id);
        return view('admin.blog.show',
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
        $dataEdit = Blog::find($id);
        return view('admin.blog.edit',
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
            $getImage = $this->image_upload($file,'uploads/blog');
            $blodStore['image'] = 'blog/' . $getImage;
        }
        Blog::where('id',$id)->update($blodStore);
        if ($blodStore) {
            return redirect()->route('blogs.index')->with('success', 'Great! You have successfully update  Blog.');
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
        $data = Blog::find($id);
        $data->delete($data);
        return redirect()->route('blogs.index')->with('success', 'Great! You have successfully Dalete Blog.');
    }
}
