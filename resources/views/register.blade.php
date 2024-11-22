<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border 0.3s ease;
        }

        input:focus {
            border-color: #007BFF;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        #link_login {
            margin-top: 20px;
            text-align: center;
        }

        #link_login a {
            text-decoration: none;
            font-size: 16px;
            color: #007BFF;
        }

        #link_login a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <x-alert type='danger'>

            @foreach ($errors->All() as $error)
                *{{ $error }}<br><br>
            @endforeach
        </x-alert>
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST" id="registrationForm" name="registrationForm">
            @csrf
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-group">
                <label for="password">Password confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" id="btn">Register</button>
        </form>
        <div id="link_login">
            <a href="{{ route('login.show') }}">Already have an account? Login</a>
        </div>
    </div>
    <script>
        let form = document.getElementById('registrationForm');

        form.onsubmit = function(event) {
            let formValid = true;
            let password = document.getElementById('password')
            let password_confirmation = document.getElementById('password_confirmation')
            let errors = ""
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(form.email.value) || email.length > 40) {
                formValid = false;
                errors += "Email Address .\n"
                
            }
            alert(emailPattern.test(form.email.value))
            if (!form.name.value) {
                formValid = false;
                errors += "name .\n"
            }

            if (password.value !== password_confirmation.value || !password.value) {
                formValid = false;
                errors += "password.\n"
            }
















            if (formValid) {
                alert("full")
            } else {
                event.preventDefault();
                alert(errors)
            }


        }
    </script>
</body>

</html>
