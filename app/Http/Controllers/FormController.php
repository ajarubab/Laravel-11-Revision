<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\smallCaseEmail;

class FormController extends Controller
{
    function getUserDetails(Request $req) {
        $req->validate([
            'username' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3'],
            'user-email' => ['required', 'email', 'regex:/^[a-zA-Z0-9]+@[a-zA-Z0-9.]+\.[a-zA-Z]{1,}$/', new smallCaseEmail()],
            'phone' => ['required', 'numeric', 'digits:10', 'regex:/^[6-9]/'],
            'skills' => 'required',
            'gender' => 'required',
            'country' => 'required|in:China,Japan,India,Russia,Usa',
            'age' => 'required|integer|between:1,65',
            'create_pass' => ['required', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
            'confirm_pass' => 'required | same:create_pass',
        ],
        [
            'username.required' => "Username can't be empty.",
            'username.min' => "Username should contain at least 3 characters.",
            'username.regex' => "Username should contain characters and spaces only.",
            'useremail.required' => "User Email can't be empty.",
            'phone.required' => "User Phone number can't be empty.",
            'phone.regex' => "Phone number must start with 6,7,8 or 9",
            'create_pass.required' => "Create Password field can't be empty.",
            'create_pass.regex' => "password must contain atlest one uppercase letter, one lowercase letter, one digit and one special character.",
            'confirm_pass.same' => "Password confirmation failed, please try again.",
        ]);
        return $req->all();
    }
}
