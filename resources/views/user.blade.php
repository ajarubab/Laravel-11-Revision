<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Page</title>
</head>
<body>
   <div>
      <h1>Welcome to User page</h1>
      <h2>
         <ul>
            <li>
               <span>Id : </span><span>{{$users->id}}</span>
            </li>
            <li>
               <span>Name : </span><span>{{$users->name}}</span>
            </li>
            <li>
               <span>Username : </span><span>{{$users->username}}</span>
            </li>
            <li>
               <span>Email : </span><span>{{$users->email}}</span>
            </li>
            <li>
               <span>City : </span><span>{{$users->address->city}}</span>
            </li>
            <li>
               <span>Zipcode : </span><span>{{$users->address->zipcode}}</span>
            </li>
            <li>
               <span>Phone : </span><span>{{$users->phone}}</span>
            </li>
         </ul>
      </h2>
      

   </div>
</body>
</html>