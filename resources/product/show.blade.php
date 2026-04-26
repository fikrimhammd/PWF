<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
    <style>
        .info-group { margin-bottom: 15px; }
        label { font-weight: bold; display: inline-block; width: 100px; }
        .btn-back { background: #666; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; }
        .btn-edit { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>

        <div class="info-group">
            <label>ID:</label>
            <span>{{ $product->id }}</span>
        </div>

        <div class="info-group">
            <label>Name:</label>
            <span>{{ $product->name }}</span>
        </div>

        <div class="info-group">
            <label>Quantity:</label>
            <span>{{ $product->qty }}</span>
        </div>

        <div class="info-group">
            <label>Price:</label>
            <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
        </div>

        <div class="info-group">
            <label>Created At:</label>
            <span>{{ $product->created_at }}</span>
        </div>

        <div class="info-group">
            <label>Updated At:</label>
            <span>{{ $product->updated_at }}</span>
        </div>

        <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">Edit</a>
        <a href="{{ route('products.index') }}" class="btn-back">Back</a>
    </div>
</body>
</html>