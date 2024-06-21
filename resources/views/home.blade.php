<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
</head>
<body>
    <div>
        <h1>Welcome to Home page</h1>
        <a href="/user">User</a><br>
        <a href="{{URL::to('/user')}}">User Link</a>
        <a href="/about">About</a><br>
        <a href="{{URL::to('/about')}}">About Link</a><br>
        <a href="{{URL::to('/about',['ramji'])}}">About Ramji</a>
    </div>

    <div style="color:green">
      <h1>Using URL :: function into double curly braces</h1>
      <h3>The current url is : </h3>{{URL::current()}}
      <h3>The full url is : </h3>{{URL::full()}}
      <h3>The previous page url was : </h3>{{URL::previous()}}
   </div>

   <div style="color:darkviolet">
      <h1>Using url()->function_name</h1>
      <h3>The current url is : </h3>{{url()->current()}}
      <h3>The full url is : </h3>{{url()->full()}}
      <h3>The previous page url was : </h3>{{url()->previous()}}

   </div>

</body>
</html>
