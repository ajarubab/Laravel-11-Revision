<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Page</title>
</head>
<body>
   <div>
      <h1>Welcome to User page</h1>
      <a href="/about">About</a><br>
       <a href="{{URL::to('/about')}}">About Link</a><br>
       <a href="/home">Home</a><br>
       <a href="{{URL::to('/home')}}">Home Link</a><br>
       <a href="{{URL::to('/about',['sitaji'])}}">About sitaji</a>

   </div>

   <div style="color:crimson">
      <h1>Using URL :: function into double curly braces</h1>
      <h3>The current url is : </h3>{{URL::current()}}
      <h3>The full url is : </h3>{{URL::full()}}
      <h3>The previous page url was : </h3>{{URL::previous()}}
   </div>

   <div style="color:blue">
      <h1>Using url()->function_name</h1>
      <h3>The current url is : </h3>{{url()->current()}}
      <h3>The full url is : </h3>{{url()->full()}}
      <h3>The previous page url was : </h3>{{url()->previous()}}

   </div>
</body>
</html>