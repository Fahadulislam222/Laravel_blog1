<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**     * Handle the incoming request.
     */
    public function __invoke(Request $request)
      {

    return view('blog.index',[

        'posts' => Post::paginate(4),
        'categories' => Category::all(),

     ]);

    }

}


