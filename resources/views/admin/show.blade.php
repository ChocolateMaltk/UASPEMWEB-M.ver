<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
</head>

<body>
    <h1>{{ $product->productName }}</h1>
    <a href="/home">Back to Product List</a><br>
    Category: {{ $product->category }} <br>
    Nama: {{ $product->productName }} <br>
    Description: {{ $product->description }} <br>
    Price: {{ $product->price }}<br>
    Photo Product: <img src="{{ asset($photos) }}" style="width: 200px; height: 200px; "><br>
    Photo Preview:
    <div style=" display:flex; flex-direction:row; justify-content: space-evenly">
        @foreach ($photoPreviews as $preview)
            <img src="{{ asset($preview) }}" style="width: 200px; height: 200px;"><br>
        @endforeach
    </div>

    Photo Progress:
    <div style=" display:flex; flex-direction:row; justify-content: space-evenly">
        @foreach ($photoProgress as $progress)
            <img src="{{ asset($progress) }}" style="width: 200px; height: 200px;"><br>
        @endforeach
    </div>
</body>

</html>
