<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\PhoneNumbery;
use App\Models\Video;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
     $video = Video::find(1);
     

    

     return $video->comments;
        
      
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        $posts = Post::findOrFail($post->id);
       

        dd($posts);
    


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        

        $post->update([
            'title' => 'We have updated',
            'description' => 'this is updated'
        ]);
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
