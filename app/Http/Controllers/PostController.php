<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\reaction;

class PostController extends Controller
{
    public function getpost(post $post)
    {
        $users = User::all();
        $reaction = reaction::all();
        return view('post')->withPost($post)->withUsers($users)->withReactions($post->reactions);
    }

    
    public function getCreate(user $users)
    {
        $users = User::all();
        return view('post.create')->withUsers($users);
    
    }
    //velden opslaan in de database 
    public function postcreate(Request $request)
    {
        $post = new post();
        $post->title = $request->input('txttitle');
        $post->text = $request->input('txttext');
        $post->name = $request->input('txtname');
        $post->date = $request->input('txtdate');
        $post->source = $request->input('txtsource');
        $post->user_id = $request->input('user');
        $post->save();
        return "GELUKT!";
    }

    public function getEdit(Post $post)
    {
        $users = User::all();
        return view('post.edit')->withUsers($users)->withpost($post);
    }
     //velden aanpassen en dan opslaan 
    public function putEdit(Request $request, Post $post)
    {
        $post->title = $request->input('txttitle');
        $post->text = $request->input('txttext');
        $post->name = $request->input('txtname');
        $post->date = $request->input('txtdate');
        $post->source = $request->input('txtsource');
        $post->user_id = $request->input('user');
        $post->save();
        return "GELUKT!";
    }
    //alle posts ophalen en in een tabel stoppen
    public function getList()
    {
        $post = Post::all();
        return view('post.list')->withPosts($post);
    }

    public function getDelete(Post $post)
    {
        
        return view('post.delete', ['post' => $post]);
    }

    public function deleteDelete(Post $post)
    {
        $post->delete();
        return redirect()->route('post.list');
    }

}
