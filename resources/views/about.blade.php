<!DOCTYPE html>
<html lang="en">
<head>
   <title>About Page</title>
</head>
<body>
    <h1>Welcome to About page</h1>
    <a href="/home">Home</a><br>
    <a href="{{URL::to('/home')}}">Home Link</a><br>
    <a href="/user">User</a><br>
    <a href="{{URL::to('/user')}}">User Link</a><br>
    <a href="{{URL::to('/home',['krishna'])}}">Krishna home</a>

   <div>
      <h1>Using URL :: function into double curly braces</h1>
      <h3>The current url is : </h3>{{URL::current()}}
      <h3>The full url is : </h3>{{URL::full()}}
      <h3>The previous page url was : </h3>{{URL::previous()}}
   </div>

   <div style="color:brown">
      <h1>Using url()->function_name</h1>
      <h3>The current url is : </h3>{{url()->current()}}
      <h3>The full url is : </h3>{{url()->full()}}
      <h3>The previous page url was : </h3>{{url()->previous()}}

   </div>

</body>
</html>