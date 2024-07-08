<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function postRoute(Request $req){
        
        echo "Requested Method : ". $req->method(). "\n\n";
        echo "Route Path is : ". '/'.$req->path(). "\n\n";
        echo "Route url is : ". $req->url(). "\n\n";
        echo "Entered Email is : ". $req->input('email'). "\n\n";
        echo "Also Entered Email is : ". $req->email. "\n\n";
        print_r($req->input()); // in raw/array form
        echo "\n\nAll Data in Object form is :\n\n ". $req->collect(). "\n\n";    // in object form
        echo "Running IP Address is : ". $req->ip(). "\n\n";    // in object form

        if($req->isMethod('post')){
            echo "post method hai\n";
        } else {
            echo "post method nahi hai\n";
        }
        
        if($req->is('user')){
            echo "user path hi hai\n\n";
        } else {
            echo "user path nahi hai\n\n";
        }
        return $req;
    }
}
