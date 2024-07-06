<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function getRoute(){
        // on the submission of the form with get method we get the following in url
        // /get-form?username=Rajat+kumar&email=Raj%40at.in&age=12&password=12345
        // it shows the data filled in the URL when we go with get method in form
        return 'Get Route Method.';
    }

    function postRoute(){
        return "Post Route Method.";
    }
    
    function putRoute(){
        return "Put Route Method.";
    }
    
    function patchRoute(){
        return "Patch Route Method.";
    }
    
    function deleteRoute(){
        return "Delete Route Method.";
    }
    
    function anyRoute(){
        return "Any Route Method.";
    }
    
    function getPostRoute(){
        return "Get-Post Route Method.";
    }
    
    function putPatchRoute(){
        return "Put-Patch Route Method.";
    }
}
