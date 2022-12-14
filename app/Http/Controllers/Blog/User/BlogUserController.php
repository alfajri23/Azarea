<?php

namespace App\Http\Controllers\Blog\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogKategori;
use App\Models\BlogKomentar;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{

    public function index(Request $request){
        $title = 'Blog - azareatimur.com';
        $populars = Blog::limit(3)->orderBy('pengunjung','desc')->get();
        $kategories = BlogKategori::all();

        if($request->key != null){
            $blogs = Blog::where('judul','like','%'.$request->key.'%')->paginate(6);
        }else{
            $blogs = Blog::latest()->paginate(6);
        }

        return view('pages.blog.user.blog_index_user',compact('blogs','populars','kategories','title'));   
    }

    public function detail($id,$link= null){
        $title = 'Detail Blog - azareatimur.com';
        $blog = Blog::find($id);
        $blog->update(['pengunjung' => $blog->pengunjung + 1]);
        $populars = Blog::inRandomOrder()->where('id_kategori',$blog->id_kategori)->limit(6)->get();

        return view('pages.blog.user.blog_detail_user',compact('blog','populars','title'));   
    }

    public function filterByCategory(Request $request){
        $title = 'Blog - azareatimur.com';
        $blogs = Blog::where('id_kategori',$request->kategori)->paginate(6);
        $populars = Blog::limit(3)->orderBy('pengunjung','desc')->get();
        $kategories = BlogKategori::all();

        return view('pages.blog.user.blog_index_user',compact('blogs','populars','kategories','title'));
    }


}
