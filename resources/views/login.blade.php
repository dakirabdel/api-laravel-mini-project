<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
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
    margin-bottom:30px; 
    
}
a{
   
    border-radius: 4px;
    background-color: #007BFF;
    
    text-align: center;
    padding: 10px;
    width: 100%;
    text-decoration: none;
    
    display: block;
    font-size: 16px;
    
    color: white;

}

button:hover,a:hover {
    background-color: #0056b3;
    
}

    </style>
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        {{-- @foreach ($errors as $error )
            <x-alert >
                {{$error}}
            </x-alert>
        @endforeach --}}
       <x-alert type='danger'>

        @foreach ($errors->All() as $error)
            *{{$error}}<br><br>
        @endforeach
       </x-alert>
        <h2>Login</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            {{-- @error('loginfaild')
                <div style="color: red; width:100%;font-weight: bold;margin-bottom:10px;">
                    {{$message}}
                </div>
                
            @enderror --}}

            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" value="{{old('email')}}" id="email" name="email" >
                
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
            </div>
            <button type="submit">Login</button>
            
                <a href="{{route('register.show')}}">Register</a>
           
            
        </form>
        
           
        
    </div>
</body>
</html>