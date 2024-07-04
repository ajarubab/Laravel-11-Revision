<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function getStudentsData() {
        $data = new Student();
        return $data->all();
    }
}
