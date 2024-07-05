<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUserData() {

        // getting everything of 'URL aka API' using get method of Http and storing it into userData
        $userData =  Http::get('https://jsonplaceholder.typicode.com/users/1');

        // storing body part of userData into the variable response, output will be in json format
        $response = $userData->body();

        // decoding the jsonified output of $response into array and sending it to the user view page
        return view('user', ['users' => json_decode($response)]);
    }

    function showQueries() {

        // using DB class table's Update method, we can update pre-existing data of the table
        $data = DB::table('college_students')->where('id','7')->update([
            'Name' => 'Roshani',
            'Email' => 'Ro@sh.ani',
            'Age' => 29,
        ]);

        if($data){
            echo "Data update successfully.<br>";
            $result = DB::table('college_students')->get();
            return view('user', ['usersData' =>$result]);
        } else {
            return "Data updation failed.";
        }
    }
}
