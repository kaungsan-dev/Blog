<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function blog(){
        $data = Blog::all();
        return view ('Blog.blog',['Blog'=>$data]);
    }
    
    public function create(){
        return view('Blog.create');
    }
    
    public function save(Request $request){
        
        $blogs=new Blog;
        
        $title = $request->title;
        $description = $request->description; 
        
        if ($files = $request->file('image')) {
            
            $destinationPath = 'public/image/'; // upload path
            
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            
            $files->move($destinationPath, $profileImage);
            
            $blogs->image = $profileImage;
        }        
        
        $blogs->title = $title;
        $blogs->description = $description;
        
        $blogs->save();
        return redirect()->route('blog.Blog');
    }
 
    public function view($id){
        $Blog = Blog::findorFail($id);
        return view('Blog.view',['blog'=>$Blog]);
    }
    
    public function edit($id){
        $Blog = Blog::findorFail($id);
        return view('Blog.edit',['blog'=>$Blog]);
    }
    
    public function update($id, Request $request){
        $title = $request->title;
        $description = $request->description;
        $old_image = $request->old_image;
        
        $blogs = Blog::findorFail($id);
        
        if($request->file('image') != ''){
            if ($files = $request->file('image')) {
                
                $destinationPath = 'public/image/'; // upload path
                
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                
                $files->move($destinationPath, $profileImage);
                
                $old_image = $profileImage;
            }
        }
          
        $blogs->title = $title;
        $blogs->description = $description;
        $blogs->image = $old_image;
        $blogs->update();
        return redirect()->route('blog.Blog');
    }
    
    public function delete($id){
        $blogs = Blog::findorFail($id);
        $blogs->delete();
        return redirect()->route('blog.Blog');
    }
    
}