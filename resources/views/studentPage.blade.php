<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student data page</title>
</head>
<body>
    <h1>Student List</h1><br>
    <table border="2">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->Name}}</td>
            <td>{{$student->Age}}</td>
            <td>{{$student->Email}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>