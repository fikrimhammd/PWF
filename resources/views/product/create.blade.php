<x-app-layout>
    <div class="py-12 bg-slate-900 min-h-screen font-sans flex items-center justify-center">
        <div class="w-full max-w-2xl px-4">
            <div class="bg-slate-800 border border-slate-700 rounded-xl shadow-lg overflow-hidden p-8">
                
                <!-- Header -->
                <div class="flex items-start mb-8">
                    <a href="{{ route('products.index') }}" class="text-slate-400 hover:text-white transition-colors mr-4 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-tight">Add Product</h2>
                        <p class="text-slate-400 text-sm mt-1">Fill in the details to add a new product</p>
                    </div>
                </div>

                <!-- Form -->
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-5">
                        <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Nama Produk</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g. Wireless Headphones"
                            class="w-full bg-slate-900 border border-slate-700 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-3 placeholder-slate-500" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Select -->
                    <div class="mb-5">
                        <label for="category_id" class="block text-sm font-medium text-slate-300 mb-2">Kategori</label>
                        <select name="category_id" id="category_id" class="w-full bg-slate-900 border border-slate-700 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-3" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Quantity & Price Row -->
                    <div class="grid grid-cols-2 gap-5 mb-8">
                        <div>
                            <label for="qty" class="block text-sm font-medium text-slate-300 mb-2">Quantity</label>
                            <input type="number" name="qty" id="qty" value="{{ old('qty', 0) }}" min="0"
                                class="w-full bg-slate-900 border border-slate-700 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-3" required>
                            @error('qty')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-slate-300 mb-2">Price (Rp)</label>
                            <input type="number" step="0.01" name="price" id="price" value="{{ old('price', 0) }}" min="0"
                                class="w-full bg-slate-900 border border-slate-700 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-3" required>
                            @error('price')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('products.index') }}" class="px-5 py-2.5 text-sm font-medium text-slate-300 bg-transparent border border-slate-600 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-800 transition-colors">
                            Save Product
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
