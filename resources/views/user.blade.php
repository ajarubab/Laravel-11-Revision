<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Page</title>
</head>
<body>
   <div>
      <h1>Welcome to User page</h1>
      <x-message-banner msg="Signup succsessfull" class="success"/>
      <x-message-banner msg="Login succsessfull" class="success"/>
      <x-message-banner msg="Only one Login attempt remaining." class="warning"/>
      <x-message-banner msg="Login Failed" class="failure"/>
   </div>
</body>
</html>