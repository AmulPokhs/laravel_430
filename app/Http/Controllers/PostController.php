<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllData()
    {
        $data = array(
            array(
                'title' => 'First title',
                'summary' => 'first summary',
                'image' => null,
                'status' => 'Active'
            ),
            array(
                'title' => 'second title',
                'summary' => 'second summary',
                'image' => null,
                'status' => 'Active'
            ),
        );
        return view('home')->with('blog_list', $data);
    }
}
