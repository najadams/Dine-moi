<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.categories.create')}}" class="py-2 px-5 bg-indigo-100 hover:shadow hover:bg-indigo-200 rounded-lg"><i>New Category &hArr;</i></a>
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rounded shadow text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$category->name}}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{Storage::url($category->image)}}" class="w-16 h-16 rounded " alt="">
                            </td>
                            <td class="px-6 py-4">
                                {{$category->description}}
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
