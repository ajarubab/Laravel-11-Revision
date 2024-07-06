<!DOCTYPE html>
<html lang="en">
<head>
    <title>UserPage</title>
</head>
<body>
    <h1>List of User</h1>
    <table border="2">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach($userData as $ud)
        <tr>
            <td>{{$ud -> Id}}</td>
            <td>{{$ud -> Name}}</td>
            <td>{{$ud -> Email}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>