<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index(Request $request)
    {
        //
        $search = trim($request->input('search'));
        $blog = Blog::query();
        if(!empty($search)){
            $blog =  $blog->where('blogs.title', 'LIKE', '%' . $search . '%')
                                ->orwhere('blogs.slug','LIKE', '%' . $search . '%');
                                
        }
        $blog = $blog->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.blog.index', compact('blog', 'search'));
    }
    public function admin_create()
    {
        Auth::user();
        $userId = Auth::user()->id;
        return view('admin.blog.create', compact('userId'));
    }
    public function admin_store(Request $request)
    {
  
        $request->validate([
            'blogimage' => 'required|image|max:2048',
        ]);

        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->userId = $request->userId;
        $slug = Str::slug($request->title);

     
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
   
        $blogs->slug = $slug;
        
        if ($request->file('blogimage')->isValid()) {
            $image = base64_encode(file_get_contents($request->file('blogimage')->path()));
        }
        $blogs->image = $image;
        $blogs->content = $request->content;

        $blogs->Save();


        return redirect('/admin/blog');
    }
    public function index()
    {
        //
        $blogs = Blog::latest()->get();
        return view('blog.blog', compact('blogs'));
    }
   
    public function Blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $allBlogs =  Blog::query()->get();

      
        return view('blog.blogDetails', compact('blog', 'allBlogs'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_edit($id)
    {
        $blog = Blog::select('blogs.id','blogs.title', 'blogs.content', 'blogs.image')->where('blogs.id',$id)->first();
    

        return view('admin.blog.edit', compact('blog'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_update(Request $request)
    {
        $blogs = Blog::find($request->id);
    
        if (!$blogs) {
            return redirect('/admin/blog')->withErrors('Blog not found.');
        }
    
        if ($request->hasFile('blogimage')) {
            $request->validate([
                'blogimage' => 'required|image|max:2048',
            ]);
    
            if ($request->file('blogimage')->isValid()) {
                $image = base64_encode(file_get_contents($request->file('blogimage')->path()));
                $blogs->image = $image;
            }
        }
    
        if (!empty($request->title)) {
            $blogs->title = $request->title;
    
            // Slug generation
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $count = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $blogs->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
    
            $blogs->slug = $slug;
        }
    
        if (!empty($request->userId)) {
            $blogs->userId = $request->userId;
        }
    
        if (!empty($request->content)) {
            $blogs->content = $request->content;
        }
    
        $blogs->save();
    
        return redirect('/admin/blog');
    }
    public function admin_delete($id)
    {
        $blogs =  Blog::find($id) ;
        $blogs->delete();
        
        return redirect('admin/blog');
    }
    /**
    
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
