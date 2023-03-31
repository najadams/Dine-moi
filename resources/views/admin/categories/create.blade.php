<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex  m-2 p-2">
                    <a href="{{route('admin.categories.index')}}" class="py-2 px-5 bg-indigo-100 hover:shadow hover:bg-indigo-200 rounded-lg"><i> Category &hArr;</i></a>
                </div>

                <div class="m-2 p-2">
                    
                </div>
        </div>
    </div>
</x-admin-layout>
