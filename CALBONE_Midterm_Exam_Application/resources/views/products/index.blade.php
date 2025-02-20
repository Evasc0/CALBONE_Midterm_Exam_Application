<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .product { display: inline-block; margin: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 10px; }
        img { width: 150px; height: auto; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Anime Products</h1>
    @foreach ($products as $product)
        <div class="product">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
            <h2>{{ $product['name'] }}</h2>
            <p>Price: ₱{{ number_format($product['price'], 2) }}</p>
        </div>
    @endforeach
</body>
</html>
