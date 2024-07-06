<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
</head>
<body>
    <h1>User form</h1>

    <!-- <form action="/get-form" method="get">
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form> -->

    <!-- <form action="/post-form" method="post">
        @csrf
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form> -->

    <!-- <form action="/put-form" method="post">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form> -->

    <!-- <form action="/patch-form" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form> -->

    <form action="/delete-form" method="post">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form>


</body>
</html>