<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    //
    public function newBlog()
    {
        return view('Newblog');
    }
}
