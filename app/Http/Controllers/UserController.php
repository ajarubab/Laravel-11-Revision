<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUserData() {
        /**
         * To connect phpmyAdmin of xamp with laravel follow these steps
         * 1. Go to phpmyadmin and create a database ( here i created 'laravelDb' named database)
         * 2. Come to .env file and change the 'DB_CONNECTION=sqlite' to 'DB_CONNECTION=mysql'
         * 3. uncomment the rest of other lines of this group
         * 4. Change the 'DB_DATABASE=laravel' to 'DB_DATABASE=laravelDb'
         * 5. Now if we run any previously working and existing route, it will show some session error.
         * 6. Go to terminal and run ' php artisan migrate '
         * 7. Now refresh the page which was showing session error, it will work fine now.
         * 8. Now run the shouUserData function's Route, you will get []
         * 9. Now from phpmyadmin page click on laravelDb -> users -> insert
         * 10. Enter the name , email and password and click on go. it will insert a data in users table.
         * 11. Now again refresh the shouUserData function's Route, you will get that single inserted data having name, email and password.
         */
        return DB::select('select * from users');
    }
}
