<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    //reactie kan opslaan de velden 
    public function comments(Request $request, Post $post )
    {
            $reaction = new reaction();
            $reaction->post_id = $request->input('postid');
            $reaction->user_id = $request->input('user');
            $reaction->text = $request->input('txttext');
            $reaction->date = $request->input('date');
            $reaction->save();

            return back();
         
    }

    
}
