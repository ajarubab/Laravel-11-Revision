<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
</head>
<body>
    <div>
        <h1>Welcome to Home page</h1>
        <x-message-banner msg="Reached Home within time" class="success"/>
        <x-message-banner msg="Failed to reach home on time." class="failure"/>
        <x-message-banner msg="Last 30 seconds remaining to reach home." class="warning"/>
    </div>
</body>
</html>
