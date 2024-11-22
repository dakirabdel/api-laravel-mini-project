<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .card {
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px ;
            padding: 20px;
            display: flex;
            flex-direction: column;
            /* justify-content: center;
            align-items: center; */
        }

        .card img {
            width:30%;
            border-radius: 8px;
            margin-bottom: 15px;
            align-self: center;
            
        }

        .card input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .card textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .card a {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
            text-align: center;
        }
        .card button {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
            text-align: center;
        }
        .modify-btn:hover{
            background-color: #28652a;
        }
        .delete-btn:hover{
            background-color: #b63228;
        }

        .modify-btn {
            background-color: #4CAF50;
            color: white;
            float: left;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            float: right;
        }

        .clear-float {
            clear: both;
        }
    </style>
</head>
<body>
    @include('extra.nav')

    <div class="card">
        
        <img id="cardImage" src="{{ asset($product->imageUrl)}}" alt="Card Image">
        <form action="{{route('product.update',$product->id)}}" method="POST" style="display: inline;" enctype="multipart/form-data">
        <input type="text" id="title" name="title" placeholder="Title" value="{{$product['title']}}">
        <textarea name="description" placeholder="Description" id="description" cols="30" rows="10">{{$product['description']}}</textarea>
        {{-- <input type="text" id="imageUrl" name="imageUrl" placeholder="Image URL" value="{{ $product['imageUrl'] }}"> --}}
        <input type="file" name="imageUrl" value="{{asset($product->imageUrl)}}"> 

        {{-- {{ route('product.delete', $product['id']) }} --}}
        
            @csrf
            @method('PUT')
            <button type="submit" class="modify-btn">Modify</button>
        </form>
        {{-- <a class="delete-btn" href="{{ route("product.delete",$product)}}">Delete</a> --}}
        <form action="{{ route('product.delete', $product['id']) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Delete</button>
        </form>
        <div class="clear-float"></div>
    </div>

    @include('extra.footer')
</body>
</html>