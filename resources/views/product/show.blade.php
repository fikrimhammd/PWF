<x-app-layout>
    <div class="py-12 bg-slate-900 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-start space-x-4">
                    <!-- Back Arrow -->
                    <a href="{{ route('products.index') }}" class="text-gray-400 hover:text-white transition-colors mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-tight">Product Detail</h2>
                        <p class="text-gray-400 text-sm mt-1">Viewing product #{{ $product->id }}</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex space-x-3">
                    @can('update', $product)
                        <x-edit-button :url="route('products.edit', $product->id)" />
                    @endcan

                    @can('delete', $product)
                        <x-delete-button :url="route('products.destroy', $product->id)" />
                    @endcan
                </div>
            </div>

            <!-- Info Box -->
            <div class="bg-slate-800 border border-slate-700 rounded-xl overflow-hidden shadow-lg">
                <!-- Row: Product Name -->
                <div class="flex border-b border-slate-700 p-5">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium pt-0.5">Product Name</div>
                    <div class="w-2/3 sm:w-3/4 text-white font-bold">{{ $product->name }}</div>
                </div>

                <!-- Row: Quantity -->
                <div class="flex border-b border-slate-700 p-5 items-center">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium">Quantity</div>
                    <div class="w-2/3 sm:w-3/4">
                        <span class="inline-flex items-center px-3 py-1 bg-emerald-900 text-emerald-400 text-xs font-semibold rounded-full">
                            {{ $product->qty }} In Stock
                        </span>
                    </div>
                </div>

                <!-- Row: Price -->
                <div class="flex border-b border-slate-700 p-5 items-center">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium">Price</div>
                    <div class="w-2/3 sm:w-3/4 text-white font-bold">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>
                </div>

                <!-- Row: Owner -->
                <div class="flex border-b border-slate-700 p-5 items-center">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium">Owner</div>
                    <div class="w-2/3 sm:w-3/4 flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-full bg-indigo-800 flex items-center justify-center text-indigo-200 text-sm font-bold">
                            {{ substr($product->user->name ?? 'U', 0, 1) }}
                        </div>
                        <span class="text-white font-medium">{{ $product->user->name ?? 'Unknown' }}</span>
                    </div>
                </div>

                <!-- Row: Created At -->
                <div class="flex border-b border-slate-700 p-5 items-center">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium">Created At</div>
                    <div class="w-2/3 sm:w-3/4 text-gray-300 text-sm">{{ $product->created_at->format('d M Y, H:i') }}</div>
                </div>

                <!-- Row: Updated At -->
                <div class="flex p-5 items-center">
                    <div class="w-1/3 sm:w-1/4 text-gray-400 text-sm font-medium">Updated At</div>
                    <div class="w-2/3 sm:w-3/4 text-gray-300 text-sm">{{ $product->updated_at->format('d M Y, H:i') }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
