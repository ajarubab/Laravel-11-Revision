<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
</head>
<body>
    <h1>User form</h1>

    <form action="/user" method="post">
        @csrf
        <input type="text"  name="username" placeholder="Enter Name"><br><br>
        <input type="email"  name="email" placeholder="Enter Email"><br><br>
        <input type="integer"  name="age" placeholder="Enter Age"><br><br>
        <input type="password"  name="password" placeholder="Enter Password"><br><br>
        <button>Submit</button>
    </form>

</body>
</html>