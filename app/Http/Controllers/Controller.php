<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home(){
        return "HOme";
    }

    function contact(){
        return "Contact";
    }
    function about(){
        return "about";
    }
    function donation(){
        return "donation";
    }
    function gallery(){
        return "galleru";
    }

    function event(){
        return "event";
    }

    function blog(){
        return "blog";
    }


    function blog_detail($id){
        return "blog detail for".$id;
    }

    function event_detail($id){
        return "event detail for".$id;
    }


//    .--------------------Admin Route------------------------
    function show_admin_dashboard(){
        return view('admin.index');
    }
}
