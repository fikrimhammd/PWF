<x-app-layout>
    <div class="py-12 bg-slate-900 min-h-screen font-sans flex items-center justify-center">
        <div class="w-full max-w-xl px-4">
            <div class="bg-slate-800 border border-slate-700 rounded-xl shadow-lg overflow-hidden p-8">
                
                <!-- Header -->
                <div class="flex items-center mb-8">
                    <a href="{{ route('categories.index') }}" class="text-slate-400 hover:text-white transition-colors mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <h2 class="text-2xl font-bold text-white tracking-tight">Add Category</h2>
                </div>

                <!-- Form -->
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <!-- Category Name Input -->
                    <div class="mb-8">
                        <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Category</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g. Electronic"
                            class="w-full bg-slate-900 border border-slate-700 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-3 placeholder-slate-500" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('categories.index') }}" class="px-5 py-2.5 text-sm font-medium text-slate-300 bg-transparent border border-slate-600 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-800 transition-colors">
                            Save Category
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
