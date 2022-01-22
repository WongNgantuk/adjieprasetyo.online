<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Post::groupBy('title')
                
                ->paginate(3)
               ;

        return view('index',[
            'posts' => $data
        ]);
    }
    
    public function project ($title)
    {
        $data = Post::where('title', $title)->get();

        // dd($data);

        return view('posting.postindex',[
            'posts' => $data,
            'judul' => $title
        ]);
    }
       
}
