<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        /* Basic styling for the card container */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    margin-top: 25px;
}

/* Styling for individual cards */
.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    transition: transform 0.3s ease;
    overflow: hidden;
    text-align: center;
    padding: 25px;

    text-decoration: none;
    color: inherit;
}

/* Card image */
.card-img {
    width: 255px;
    height: 255px;
    object-fit: cover;
   
}

/* Card content */
.card-content {
    padding: 15px;
}

/* Card title */
.card-title {
    font-size: 1.5rem;
    margin: 10px 0;
    color: #333;
}

/* Card description */
.card-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 15px;
}

/* Read More Button */
.card-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0F4D8F;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

/* Hover effect for cards and buttons */
.card:hover {
    /* transform: translateY(-10px); */
    background-color:rgb(221, 221, 221); 
}

.card-btn:hover {
    background-color: #f1c40f;
    color: #333;
}

    </style>
</head>
<body>
    @guest
        
    @endguest
    <nav>
        @include('extra.nav')
        
    </nav>
    
    <br>
    
    <div class="container">
       
        @foreach ($products as $product)
            <a href="{{ route("product.show",$product['id'])}}" class="card">
                <img class="card-img" src="{{ asset($product->imageUrl)}}">
                <div class="card-content">
                    <h3 class="card-title">{{$product['title']}}</h3>
                    <p class="card-description">{{  Str::limit($product['description'], 20)}}</p>
                    <p  class="card-btn">show more</p>
                </div>
            </a>
        @endforeach
        

       

        
    </div>
    



    <br>
    <br>
    <br>
    <br>
    <footer>
        @include('extra.footer')
    </footer>
    
    
</body>
</html>