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
         @foreach($usersData as $ud)
         <tr>
            <td>{{$ud->Id}}</td>
            <td>{{$ud->Name}}</td>
            <td>{{$ud->Email}}</td>
         </tr>
         @endforeach
      </table>
      

   </div>
</body>
</html>