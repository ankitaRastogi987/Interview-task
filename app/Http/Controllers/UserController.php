<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
class UserController extends Controller
{
    function delete(Request $request)
    {
        if(!session()->has('email'))
        {
            return redirect('/');
        }
        $id=$request->get("id");
        Post::where('id','=',$id)->delete();
        return redirect('/home')->with('delete_post_status','Post deleted Successfully');
    }

    function edit(Request $request)
    {
        if(!session()->has('email'))
        {
            return redirect('/');
        }
        $id=$request->get("id");
        $post=Post::where('id','=',$id)->first();
        return view('edit',compact('post',$post));
    }

    function update(Request $request)
    {
        if(!session()->has('email'))
        {
            return redirect('/');
        }
        $id=$request->get("id");

        $request->validate(
         [
                 'title'=>'required',
                 'detail'=>'required',
                 'category'=>'required',
                 'post_img'=>'file|mimes:jpeg,bmp,png,jpg',
         ]);
        if(empty($request->file('post_img')) || $request->file('post_img')===null)
        {
             $image=$request->get('old_img');
        }
        else
        {
            $image=$request->file('post_img')->store('public');
        }
        Post::where('id',$request->get("id"))->update([
                'title'=>$request->get('title'),
                'detail'=>$request->get('detail'),
                'category'=>$request->get('category'),
                'post_img'=>$image,
        ]);
        return redirect('/home')->with('update_post_status','Post Updated Successfully');
    }

    function new_post(Request $request)
    {
        return view('new_post');
    }

    function upload_new_post(Request $request)
    {
        // dd($request->file('post_img'));
        if(!session()->has('email'))
        {
            return redirect('/');
        }

        $request->validate(
         [
                 'title'=>'required|unique:posts',
                 'detail'=>'required',
                 'category'=>'required',
                 'post_img'=>'required|file|mimes:jpeg,bmp,png,jpg',
         ]);
        $image=$request->file('post_img')->store('public');

        Post::create([
                'title'=>$request->get('title'),
                'detail'=>$request->get('detail'),
                'category'=>$request->get('category'),
                'post_img'=>$image,
        ]);
        return redirect('/new_post')->with('save_post_status','Post uploded Successfully');
    }

    function home(Request $request)
    {
        if($request->category == null)
            $posts = Post::orderBy('id','desc')->paginate(3);
        else
            $posts = Post::where('category',$request->category)->orderBy('id','desc')->paginate(3);
        return view('home',compact('posts',$posts));        
    }
 

    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
    function login(Request $request)
    {
        if(session()->has('email'))
        {
            return redirect('home');
        }
        $request->validate(
        [
                'email'=>'required|email',
                'password'=>'required'
        ]);
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $user = User::where( 'email', '=', $email)->where('password','=', $password)->first();

        if(isset($user->email) && !empty($user->email))
        {
            $request->session()->put('email',$request->input('email'));
            $request->session()->put('id',$user->id);
            $request->session()->put('password',$password);
         
            return redirect('home');
        }
        else
        {
            return redirect('/')->with('login_msg',"Invalid id or password");
        }
    }
    function index()
    {
        if(session()->has('email'))
        {
            return redirect('home');
        }
        return view('index');
    }
}

