<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tentang Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Informasi Mahasiswa -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200 border-b pb-2">Data Diri Mahasiswa</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <p class="mb-2"><span class="font-bold">Nama:</span> Muhammad Dzulfikri</p>
                                <p class="mb-2"><span class="font-bold">NIM:</span> 20230140159</p>
                                <p class="mb-2"><span class="font-bold">Program Studi:</span> {{ $prodi ?? 'Teknik Informatika' }}</p>
                            </div>
                            
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <p class="font-bold mb-2">Hobi:</p>
                                <ul class="list-disc list-inside space-y-1">
                                    @if(isset($hobi) && is_array($hobi))
                                        @foreach($hobi as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>Membaca Buku</li>
                                        <li>Programming</li>
                                        <li>Olahraga</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi Singkat -->
                    <div class="mt-6 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Deskripsi</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Saya adalah mahasiswa {{ $prodi ?? 'Teknik Informatika' }} yang memiliki ketertarikan dalam pengembangan web 
                            menggunakan framework Laravel. Saat ini sedang mempelajari arsitektur MVC dan implementasinya 
                            dalam pembuatan aplikasi web modern.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>