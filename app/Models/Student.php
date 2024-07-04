<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // this file is created using the command " php artisan make:model Student "

    // 1. Normally the name of the model should be Same as of table name with first letter in capital case.
    // 2. Normally the name of the model should be Singular of table name of the database.

    // If the model is not created using above 2 rules then we can connect our model by following way:
    // just assign the table name to the protected $table variable and we are good to go.

    protected $table = "college_students";  // here 'college_students' is the table name in the database.

    // we can use any funtion also here if needed, for example:

    function showThisMsg() {
        return "This message is from Student Model file";
    }

    /**
     * If we run command ' php arisan model:show Student ' we will get the following in terminal: 
     * 
     * App\Models\Student .................................................................................................  
  Database ..................................................................................................... mysql  
  Table ............................................................................................. college_students  

  Attributes ............................................................................................. type / cast  
  id increments, unique ................................................................................ int(50) / int  
  Name .................................................................................................. varchar(100)  
  Email ................................................................................................. varchar(100)  
  Age ......................................................................................................... int(2)  

  Relations ..........................................................................................................  

  Events .............................................................................................................  

  Observers .......................................................................................................... 
     */
}
