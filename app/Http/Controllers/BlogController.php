<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function showBlog()
    {
        $data['posts'] = Blog::paginate();
        return view("pages.blog", $data);
    }

    public function showPost(Request $request)
    {
        $data['post'] = DB::table('blogs')
            ->where('slug', $request->slug)
            ->first();
        return view("pages.post", $data);
    }
}
