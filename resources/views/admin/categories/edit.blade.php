<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex  m-2 p-2">
                    <a href="{{route('admin.categories.index')}}" class="py-2 px-5 bg-indigo-100 hover:shadow hover:bg-indigo-200 rounded-lg"><i> Category Index</i></a>
                </div>

                <div class="m-2 p-2 shadow bg-gray-200 rounded">
                  <form method="POST" enctype="multipart/form-data" action="{{route('admin.categories.update', $category->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><b><i>Category</i></b></label>

                    <div class="flex">
                      <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        <label for="name">name</label>
                      </span>
                      <input type="text" id="name" name="name" value="{{$category->id}}" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                
                
                    <div class="mb-6 p-2">
                      <div>
                        <img class="w-32 h-32" src="{{Storage::url($category->image)}}" alt="">
                      </div>
                      <label class="block mb-2 py-3 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload image</label>
                      <input type="file" required name= "image" name="image" class="block w-full text-sm p-2 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="      ">
                    </div>
                
                    <div class="mb-6">
                      <label for="description" class="block py-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                      <input type="text" value="{{$category->description}}" required id="description" name="description" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mt-6 p-4">
                      <button type="submit"  required class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                  </form>
  
                </div>
        </div>
    </div>
</x-admin-layout>

