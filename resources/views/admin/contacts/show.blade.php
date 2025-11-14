<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Message') }}: {{ $contact->subject }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="mb-4">
                        <p><strong>From:</strong> {{ $contact->name }} ({{ $contact->email }})</p>
                        <p><strong>Received:</strong> {{ $contact->created_at->format('d M Y, H:i') }}</p>
                        <p><strong>Subject:</strong> {{ $contact->subject }}</p>
                    </div>

                    <div class="border-t dark:border-gray-700 pt-4 mt-4">
                        <p class="whitespace-pre-wrap">{{ $contact->message }}</p>
                    </div>

                </div>
            </div>
             <div class="mt-4 flex justify-between">
                <a href="{{ route('admin.contacts.index') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-200">
                    &larr; Back to all messages
                </a>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-200 ms-2">
                        Delete this message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>