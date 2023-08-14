<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div>
        @if($errors ->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form action="{{route('product.update', ['product' => $product])}}" method="post">

        @csrf
        @method('put')
        <div>
            <label for="#">Name</label>
            <input type="text" value="{{$product->name}}" name="name" id="name" placeholder="name">
        </div>
        <div>
            <label for="#">Qty</label>
            <input type="number" value="{{$product->qty}}" name="qty" id="qty" placeholder="qty">
        </div>
        <div>
            <label for="#">Price</label>
            <input type="text" value="{{$product->price}}" name="price" id="price" placeholder="price">
        </div>
        <div>
            <label for="#">Description</label>
            <input type="text" value="{{$product->description}}" name="description" id="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>