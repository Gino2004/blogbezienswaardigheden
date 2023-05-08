<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class MenuController extends Controller
{
    public function getMenu(){

        $post = post::orderByDesc('id')->get();
        return view('welcome')->withPosts($post);
    }
}
