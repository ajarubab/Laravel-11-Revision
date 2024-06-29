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
        // Try by appending "?age=19&&country=india&&consent=agreed" and changing the values of age, country and consent
        echo "Middleware validadtions passed <br>";
        return "Welcome ".$name;
    }
}
