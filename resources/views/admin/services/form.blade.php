<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($service) ? __('Edit Service') : __('Create Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    {{-- Pesan Sukses (Untuk Hapus Gambar) --}}
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- FORM START: Perhatikan enctype --}}
                    <form method="POST" action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service))
                            @method('PUT')
                        @endif

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $service->name ?? '')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('description', $service->description ?? '') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price', $service->price ?? '')" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="images" :value="__('Documentation Images (Select Multiple)')" />
                            <input id="images" type="file" name="images[]" multiple class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG. Max: 2MB per file.</p>
                        </div>

                        @if(isset($service) && $service->images->count() > 0)
                            <div class="mt-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-3">Current Images</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    @foreach($service->images as $img)
                                        <div class="relative group border p-2 rounded-md">
                                            <img src="{{ asset('storage/' . $img->image_path) }}" alt="Service Image" class="w-full h-32 object-cover rounded-md">
                                            
                                            {{-- Tombol Hapus Gambar Spesifik --}}
                                            <button type="button" onclick="if(confirm('Delete this image?')) document.getElementById('delete-img-{{ $img->id }}').submit()" 
                                                    class="absolute top-1 right-1 bg-red-600 text-white w-6 h-6 flex items-center justify-center rounded-full hover:bg-red-700 text-xs shadow-md">
                                                &times;
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ isset($service) ? __('Update') : __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                    {{-- Hidden Forms untuk Hapus Gambar (Agar aman menggunakan Method DELETE) --}}
                    @if(isset($service))
                        @foreach($service->images as $img)
                            <form id="delete-img-{{ $img->id }}" action="{{ route('admin.services.image.destroy', $img->id) }}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>