<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        .btn-submit { background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        .btn-back { background: #666; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="qty" value="{{ old('qty') }}" required>
                @error('qty')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Price (Rp)</label>
                <input type="number" name="price" value="{{ old('price') }}" step="0.01" required>
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-submit">Save Product</button>
            <a href="{{ route('products.index') }}" class="btn-back">Back</a>
        </form>
    </div>
</body>
</html>