<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Page</title>
</head>
<body>
   <div>
      <h1>Welcome to User page</h1>
      <table border="2">
         <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
         </tr>
         @foreach($users as $user)
         <tr>
            <td>{{$user->Id}}</td>
            <td>{{$user->Name}}</td>
            <td>{{$user->Email}}</td>
         </tr>
         @endforeach
      </table>

   </div>
</body>
</html>