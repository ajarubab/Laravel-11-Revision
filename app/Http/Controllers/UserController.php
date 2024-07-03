<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // must included

class UserController extends Controller
{
    function showUserData() {
        /**
         * To connect phpmyAdmin of xamp with laravel without use of migrate command follow these steps
         * 1. Go to phpmyadmin and drop the pre-existing database if any by following steps:
         * 2. Click on the Database name on left panel
         * 3. Click on the Operations -> Scroll down to red lettered 'Drop the database(DROP)'
         * 4. Click on 'Drop the database(DROP)' -> OK
         * 5. Now create a new database again manually by clicking on 'Databases' tab -> create database
         * 6. Name the database( i have created as 'laravelDatabase') and then click on create.
         * 7. Now create a table manually here and to do so into 'Create new table' tab Enter the name of table.
         * 8. I have given the table name 'users' with no. of columns 3 then click on create.
         * 9. create 'Id' of INT type of length 50 with A.I (Auto Increment) checked for first row.
         * 10. create 'Name' of 'VARCHAR' type of length 100.
         * 11. create 'Email' of 'VARCHAR' type of length 100. click on 'Save'.
         * 12. Change the to 'DB_DATABASE=laravelDatabase' and  'SESSION_DRIVER=database' to 'SESSION_DRIVER=file'.
         * 13. Now run the shouUserData function's Route, you will get []
         * 14. Now from phpmyadmin page click on laravelDatabase -> users -> insert
         * 15. Enter the name and email click on go. it will insert a data in users table.
         * 16. Now again refresh the shouUserData function's Route, you will get that single inserted data having name, email and password.
         */
        return DB::select('select * from users');
    }
}
