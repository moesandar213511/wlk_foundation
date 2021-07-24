<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\ServiceData;
use App\CustomClass\BlogData;
use App\CustomClass\TeamData;
use App\Service;
use App\Blog;
use App\Team;
use App\Contact;
use Session;
use App\Donate;
use App\Office;

class ClientController extends Controller
{
    function index(){
        $office = Office::find(1);
        $blogs = Blog::all();
        $blogs_three = Blog::orderBy('id', 'desc')->take(6)->get();
        $blogs_one = Blog::orderBy('id','desc')->take(1)->get();
        $donates = Donate::orderBy('id','desc')->get();
    	return view('user.index',compact('blogs', 'donates', 'blogs_one','office', 'blogs_three'))->with([
            'url' => 'home'
        ]);
    }
    function about(){
        $blogs = Blog::all()->random(6);        
        $office = Office::find(1);
    	return view('user.about',compact('blogs','office'))->with([
            'url' => 'about'
        ]);
    }
    function blog(){
        // $blogs = Blog::orderBy('id', 'desc')->take(6)->get();
        $blogs = Blog::all()->random(6);
        $office = Office::find(1);
        $blog = Blog::orderBy('id', 'desc')->paginate(9);
        return view('user.blog', compact('blog','office'))->with([
            'url' => 'blog',
            'blogs' => $blogs
        ]);
    }
    function contact(){
        $office = Office::find(1);
        $offices = Office::all();
    	return view('user.contact',compact('offices','office'))->with([
            'url' => 'contact'
        ]);;
    }
    function insert_contact(Request $request){
        Session::flash('success', 'Insert Form Successfully');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $subject = $request->get('subject');
        $message = $request->get('message');
        Contact::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message
        ]);
        return redirect('/contact');
    }
    function blogsingle($id){
        $office = Office::find(1);
        $obj = new BlogData($id);
        $blog_obj = $obj->getSingleBlogData();
        return view('user.blogSingle',compact('blog_obj','office'))->with([
            'url' => 'blog'
        ]);
    }
    function donate(){
        $office = Office::find(1);
        $blogs = Blog::orderBy('id', 'desc')->get();
        $donates = Donate::orderBy('id', 'desc')->get();
        return view('user.donate',compact('blogs','office','donates'))->with([
            'url' => 'donate'
        ]);
    }
    function insert_donate(Request $request){
        Session::flash('success','Insert form successfully');
        $name = $request->get('name');
        $email = $request->get('email');
        $country = $request->get('country');
        $amount = $request->get('amount');
        $comment = $request->get('comment');
        Donate::create([
            'name' => $name,
            'email' => $email,
            'country' => $country,
            'amount' => $amount,
            'comment' => $comment
        ]);
        return redirect('/donate');

    }

}
