<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        .btn-submit { background: #2196F3; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        .btn-back { background: #666; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="qty" value="{{ old('qty', $product->qty) }}" required>
                @error('qty')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Price (Rp)</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01" required>
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-submit">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn-back">Back</a>
        </form>
    </div>
</body>
</html>