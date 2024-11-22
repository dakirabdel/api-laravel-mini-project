<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navbar</title>
    <style>
        /* Basic reset to remove default margins/padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin-bottom:20px; 
}

/* Styling the navbar */
.navbar {
    background-color: #333;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;


    
    width: 100%;
    
    
    position: fixed;
    top: 0;
    
    
}

.navbar-brand a {
    color: white;
    font-size: 24px;
    text-decoration: none;
}

.navbar-links {
    list-style: none;
    display: flex;
}

.navbar-links li {
    margin-left: 20px;
}

.navbar-links a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 8px 16px;
    transition: background-color 0.3s;
}

.navbar-links a:hover {
    background-color: #555;
    border-radius: 4px;
}

    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/home">
                Website
            
            </a>
        </div>
        <ul class="navbar-links">
            <li><a href="/home">Products</a></li>
            <li><a href="/addProduct">add product</a></li>
            <li><a href="/logout">Logout</a></li>
            {{-- <li><a href="#">Profile</a></li>
            <li><a href="#">Profile</a></li> --}}
        </ul>
    </nav>

</body>
</html>
