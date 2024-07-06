<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function userQueries() {

        //------------ Some inbuilt Model-Eloquent function -------------------

        // return User::all();
        // return User::first();
        // return User::get();
        // return User::count();
        // return User::find(7);

        //-----------------------------------------------------------------------

        /**
         * Data Insertion in the table
         */
        // $data = User::insert([
        //     'Name' => 'Ramesh',
        //     'Email' => 'Ram@esh.in'
        // ]);

        // if($data){
        //     echo "Data inserted Successfully in the Table.";
        // } else {
        //     echo "Data insertion failed.";
        // }

        //-----------------------------------------------------------------------

        /**
         * Pre-Existing data Updation in the table
         */

        // $data = User::where('Id',4)->update([
        //    'Name' => 'Rocky',
        //    'Email' => 'Ro@key.in',
        // ]);

        // if($data){
        //     echo "Data Updated Successfully in the Table.";
        // } else {
        //     echo "Data Updation failed.";
        // }
        
        //-----------------------------------------------------------------------

        /**
         * Pre-Existing data Removal in the table
         */

        // $data = User::where('Id',8)->delete();

        // if($data){
        //     echo "Data Deleted Successfully from the Table.";
        // } else {
        //     echo "Data Deletion failed.";
        // }

        //-----------------------------------------------------------------------
        
        /**
         * Fetching the pre-existing data of table and sending it to webpage for display
         */
        $userData = User::all();
        return view('user',['userData' => $userData]);

        //-----------------------------------------------------------------------

    }
}
