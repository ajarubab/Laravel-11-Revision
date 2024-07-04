<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function getStudentsData() {
        $data = new Student();
        echo $data->showThisMsg();  // fetching and displaing the showThisMsg function result from controller to view page.
        return view('studentPage', ['students' => $data->all()]);
    }
}
