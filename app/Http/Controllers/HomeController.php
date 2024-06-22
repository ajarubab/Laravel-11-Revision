<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        return "Showing Student details";
    }

    function add() {
        return "Adding Student details";
    }
    
    function delete() {
        return "Student Deleted.";
    }

    function update() {
        return 'Updating Student details.';
    }
    
    function about($name) {
        return $name;
    }
}
