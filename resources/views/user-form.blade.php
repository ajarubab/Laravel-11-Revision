
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
            <input class="user-details {{$errors->first('username') ? 'input-error' : ''}}" type="text" placeholder="Enter Username" name="username" value="{{old('username')}}">
            <span style="color:red">@error('username'){{$message}}@enderror</span><br>
        </div>
        <div class="input-wrapper">
            <input class="user-details {{$errors->first('user-email') ? 'input-error' : ''}}" type="email" placeholder="Enter Email" name="user-email" value="{{old('user-email')}}">
            <span style="color:red">@error('user-email'){{$message}}@enderror</span><br>
        </div>
        <div class="input-wrapper">
            <input class="user-details {{$errors->first('phone') ? 'input-error' : ''}}" type="text" placeholder="Phone Number" name="phone" value="{{old('phone')}}">
            <span style="color:red">@error('phone'){{$message}}@enderror</span><br>
        </div>
        <h3>User Skills</h3>
        <div class="input-wrapper-checkbox {{$errors->first('skills') ? 'input-error' : ''}}">
            <input type="checkbox" id='php' name="skills[]"
            value='PHP' {{ is_array(old('skills')) && in_array('PHP', old('skills')) ? 'checked' : '' }}>
            <label for="php">PHP</label>
            <input type="checkbox" id='laravel' name="skills[]"
            value='LARAVEL' {{ is_array(old('skills')) && in_array('LARAVEL', old('skills')) ? 'checked' : '' }}>
            <label for="laravel">LARAVEL</label>
            <input type="checkbox" id='vue' name="skills[]" 
            value='VUE3' {{ is_array(old('skills')) && in_array('VUE3', old('skills')) ? 'checked' : '' }}>
            <label for="vue3">VUE3</label>
            <input type="checkbox" id='python' name="skills[]"
            value='PYTHON' {{ is_array(old('skills')) && in_array('PYTHON', old('skills')) ? 'checked' : '' }}>
            <label for="python">PYTHON</label>
        </div>
        <span style="color:red">@error('skills'){{$message}}@enderror</span><br>
        <h3>Gender</h3>
        <div class="input-wrapper-radio {{$errors->first('gender') ? 'input-error' : ''}}">
            <input type="radio" id='male' name="gender" value='MALE' {{ old('gender') == 'MALE' ? 'checked' : '' }}>
            <label for="male">MALE</label>
            <input type="radio" id='female' name="gender" value='FEMALE' {{ old('gender') == 'FEMALE' ? 'checked' : '' }}>
            <label for="female">FEMALE</label>
            <input type="radio" id='other' name="gender" value='OTHER' {{ old('gender') == 'OTHER' ? 'checked' : '' }}>
            <label for="other">OTHER</label>
        </div>
        <span style="color:red">@error('gender'){{$message}}@enderror</span><br>
        <div class="input-wrapper">
            <h3>Country</h3>
            <select class="{{$errors->first('country') ? 'input-error' : ''}}" name="country"  value="{{old('country')}}">
                <option value="select country">Select Country</option>
                <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>China</option>
                <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                <option value="Russia" {{ old('country') == 'Russia' ? 'selected' : '' }}>Russia</option>
                <option value="Usa" {{ old('country') == 'Usa' ? 'selected' : '' }}>USA</option>
            </select>
            <span style="color:red">@error('country'){{$message}}@enderror</span><br>
        </div><br>
        <div class="input-wrapper">
            <h3>Age</h3>
                <input class="{{$errors->first('age') ? 'input-error' : ''}}"
                type="range" id="ageRange" name='age' min="18" max="75"
                value="{{old('age')}}" oninput="updateAgeValue(this.value)">
                <span id="ageValue">{{ old('age', 18) }}</span>
                <span style="color:red">@error('age'){{$message}}@enderror</span>
            </select>
        </div>
        <div class="input-wrapper">
            <input id="createPass" class="user-details {{$errors->first('create_pass') ? 'input-error' : ''}}" type="password" placeholder="Create Password" name="create_pass">
            <span id="createPassError" style="color:red">@error('create_pass'){{$message}}@enderror</span><br>
        </div>
        <div class="input-wrapper">
            <input id="confirmPass" class="user-details {{$errors->first('confirm_pass') ? 'input-error' : ''}}" type="password" placeholder="Confirm Password" name="confirm_pass">
            <span id="confirmPassError" style="color:red">@error('confirm_pass'){{$message}}@enderror</span><br>
        </div>
        <div>
        <input type="checkbox" id='i_agree' name="i_agree"
            value='I Agree' onchange="toggleSubmitButton()">
            <label for="i_agree">I agree to share my information by this form to form owner.</label>
        </div>
        <div class="input-wrapper">
            <button class="user-details"  id="submitButton" type="submit" disabled>Signup</button>
        </div>
    </form>
    
    <script>
        // script to update the slider value for Age
        function updateAgeValue(value) {
            document.getElementById('ageValue').textContent = value;
        }

        // Ensure the displayed value is correct when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            var ageRange = document.getElementById('ageRange');
            updateAgeValue(ageRange.value);
        });

        // Update the value when the slider is changed (to ensure proper binding)
        document.getElementById('ageRange').addEventListener('input', function() {
            updateAgeValue(this.value);
        });

        // submit button activation on i agree check

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize submit button state
            toggleSubmitButton();
        });

        function toggleSubmitButton() {
            const iAgreeCheckbox = document.getElementById('i_agree');
            const createPass = document.getElementById('createPass');
            const confirmPass = document.getElementById('confirmPass');
            const submitButton = document.getElementById('submitButton');
            const createPassError = document.getElementById('createPassError');
            const confirmPassError = document.getElementById('confirmPassError');

            submitButton.disabled = !iAgreeCheckbox.checked;
            if (createPass.value === confirmPass.value && iAgreeCheckbox.checked) {
                createPass.classList.remove('input-error');
                confirmPass.classList.remove('input-error');
                createPassError.classList.add('hidden');
                confirmPassError.classList.add('hidden');
                createPassError.textContent = '';
                confirmPassError.textContent = '';
            }
        }


    document.getElementById('createPass').addEventListener('input', toggleSubmitButton);
    document.getElementById('confirmPass').addEventListener('input', toggleSubmitButton);

    </script>
</div>
</body>
</html>
