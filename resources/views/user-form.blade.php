
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{'CSS/Style.css'}}">
    <title>Document</title>
</head>
<body>
<div>
    <h1>User Details Form</h1>
    <form action="/add-user-details" method="post">
        @csrf
        <div class="input-wrapper">
            <input class="user-details" type="text" placeholder="Enter Username" name="username"><br>
        </div>
        <div class="input-wrapper">
            <input class="user-details" type="email" placeholder="Enter Email" name="useremail"><br>
        </div>
        <div class="input-wrapper">
            <h3>User Skills</h3>
            <input type="checkbox" id='php' name="skill[]" value='PHP'><label for="php">PHP</label>
            <input type="checkbox" id='laravel' name="skill[]" value='LARAVEL'><label for="laravel">LARAVEL</label>
            <input type="checkbox" id='vue' name="skill[]" value='VUE3'><label for="vue3">VUE3</label>
            <input type="checkbox" id='python' name="skill[]" value='PYTHON'><label for="python">PYTHON</label>
        </div><br>
        <div class="input-wrapper">
            <h3>Gender</h3>
            <input type="radio" id='male' name="gender" value='MALE'><label for="male">MALE</label>
            <input type="radio" id='female' name="gender" value='FEMALE'><label for="female">FEMALE</label>
            <input type="radio" id='other' name="gender" value='OTHER'><label for="other">OTHER</label>
        </div><br>
        <div class="input-wrapper">
            <h3>Country</h3>
            <select name="Country" id="contry">
                <option value="select country">Select Country</option>
                <option value="China">China</option>
                <option value="Japan">Japan</option>
                <option value="India">India</option>
                <option value="Russia">Russia</option>
                <option value="Usa">USA</option>
            </select>
        </div><br>
        <div class="input-wrapper">
            <h3>Age</h3>
                <input type="range" name='age' min="18" max="75">
            </select>
        </div><br>
        <div class="input-wrapper">
            <input class="user-details" type="password" placeholder="Create Password" name="create_pass"><br>
        </div>
        <div class="input-wrapper">
            <input class="user-details" type="password" placeholder="Confirm Password" name="confirm_pass"><br>
        </div>
        <div class="input-wrapper">
            <button class="user-details" type="submit">Signup</button>
        </div>
    </form>
</div>
</body>
</html>
