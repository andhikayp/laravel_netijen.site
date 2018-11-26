<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
        // return redirect()->route('post.index')->with('success','You are log in');
    }

    public function id(Request $request, $post)
    {
        $users = DB::select('select * from posts where user_id = :user_id', ['user_id' => $post]);
        // $user = DB::table('posts')->where('user_id', $post);
        // dd($user);
        $sembarang = User::find($post);
        // dd($sembarang);
        // return view('id', ['users' => $users]);

        // dd($post);

        // // $post= Post::all();
        
        // // $user_id =  $post->user_id;
        // $user = Post::find('2');
        // dd($user);
        return view('id',compact('users', 'sembarang'));
        // return view('id')->with('posts', $users->posts);   
    }

    public function about()
    {
        return view('about');
    }
}