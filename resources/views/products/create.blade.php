<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
    <style>
        h1{
            display: flex;
            justify-content: center;
        }
        form{
            /* display: flex;
            justify-content: center; */
            width: 500px;
            height: 300px;
            background-color: whitesmoke;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors ->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">

        @csrf
        @method('post')
        <div>
            <label for="#">Name</label>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div>
            <label for="#">Qty</label>
            <input type="number" name="qty" id="qty" placeholder="qty">
        </div>
        <div>
            <label for="#">Price</label>
            <input type="text" name="price" id="price" placeholder="price">
        </div>
        <div>
            <label for="#">Description</label>
            <input type="text" name="description" id="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="save a new products">
        </div>
    </form>
</body>
</html>