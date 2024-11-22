@include('extra.nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"],
input[type="url"],
textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="text"]:focus,
input[type="url"]:focus,
textarea:focus {
    border-color: #007bff;
    outline: none;
}
input[type='file']{
    margin: 12px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
       
        <h1>Submit Your Image</h1>
        <form id="imageForm" method="POST" action="/addProduct/store" enctype="multipart/form-data" >
            @csrf
            <label name="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label name="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            {{-- <label name="imageUrl">Image URL:</label>
            <input type="text" id="imageUrl" name="imageUrl"> --}}


            <label >Image</label>
            <input type="file" id="imageUrl" name="imageUrl" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

@include('extra.footer');