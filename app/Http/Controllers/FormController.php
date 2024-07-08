<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function getRoute(Request $req){
        // on the submission of the form with get method we get the following in url
        // /get-form?username=Rajat+kumar&email=Raj%40at.in&age=12&password=12345
        // it shows the data filled in the URL when we go with get method in form
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }

    function postRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function putRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function patchRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function deleteRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function anyRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function getPostRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
    
    function putPatchRoute(Request $req){
        echo "Requested Method : ". $req->method(). "\n\n";
        return $req;
    }
}
