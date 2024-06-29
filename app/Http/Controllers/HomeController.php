<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Tried with "/student/show"
     * Tried with "/student/show?age=18"
     * Tried with "/student/show?age=14&&country=usa"
     * Tried with "/student/show?age=19&&country=usa"
     * Tried with "/student/show?age=15&&country=india"
     * Tried with "/student/show?age=19&&country=india"
     */
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
    
    /**
     * Tried with "/student/show?age=15&&country=usa"
     * Tried with "/student/show?age=25&&country=usa"
     * Tried with "/student/show?age=15&&country=india"
     * Tried with "/student/show?age=25&&country=india"
     * Tried with "/student/show?age=25&&country=india&&consent=abc"
     * Tried with "/student/show?age=25&&country=india&&consent=agreed"
     */
    function about($name) {
        // Try by appending "?age=19&&country=india&&consent=agreed" and changing the values of age, country and consent
        echo "Middleware validadtions passed <br>";
        return "Welcome ".$name;
    }
}
