<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Session Message -->
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Upload Form -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Upload New Image</h3>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="caption" :value="__('Caption (Optional)')" />
                            <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Image File')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Upload') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Image Grid -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Uploaded Images</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @forelse ($galleryItems as $item)
                            <div class="relative group">
                                <img src="{{ Storage::url($item->image_url) }}" alt="{{ $item->caption }}" class="w-full h-40 object-cover rounded-md shadow">
                                <p class="text-sm mt-1 truncate">{{ $item->caption }}</p>
                                <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" class="absolute top-1 right-1" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1 bg-red-600 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        @empty
                            <p class="col-span-full text-center">No gallery items found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>