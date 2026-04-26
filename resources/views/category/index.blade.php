<x-app-layout>
    <div class="py-12 bg-slate-900 min-h-screen font-sans">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 border border-slate-700 rounded-xl shadow-lg overflow-hidden p-6">
                
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-xl font-bold text-white tracking-tight">Category List</h2>
                        <p class="text-slate-400 text-sm">Manage your category</p>
                    </div>
                    <div>
                        <a href="{{ route('categories.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Category
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-slate-900 rounded-xl overflow-hidden border border-slate-700">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead class="bg-slate-800 text-slate-400 font-medium text-xs uppercase tracking-wider">
                            <tr>
                                <th scope="col" class="px-6 py-4 border-b border-slate-700 w-16">#</th>
                                <th scope="col" class="px-6 py-4 border-b border-slate-700">NAME</th>
                                <th scope="col" class="px-6 py-4 border-b border-slate-700">TOTAL PRODUCT</th>
                                <th scope="col" class="px-6 py-4 border-b border-slate-700 w-32 text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/50">
                            @forelse($categories as $category)
                            <tr class="hover:bg-slate-800/50 transition-colors">
                                <td class="px-6 py-4 text-slate-400">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 font-medium text-white">{{ $category->name }}</td>
                                <td class="px-6 py-4">{{ $category->products_count }}</td>
                                <td class="px-6 py-4 flex justify-center space-x-3">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="text-slate-400 hover:text-yellow-500 transition-colors" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-slate-400 hover:text-red-500 transition-colors" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-slate-500">
                                    No categories found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
