@extends('layouts.app')
@section('title', 'LARAPP - Edit Category')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 sm:w-[40rem] w-full">
    <div class="flex">
        <div class="w-full">

            <nav class="flex items-center justify-center py-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-[#614883]">
                    <li class="inline-flex items-center">
                    <a href="{{ url('home') }}" class="inline-flex items-center text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Dashboard
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ url('categories') }}" class="ml-1 text-sm font-medium">Categories Module</a>
                    </div>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="#" class="ml-1 text-sm font-medium">Edit Category</a>
                    </div>
                    </li>
                </ol>
            </nav>
            <section class="flex flex-col break-words bg-white/80 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg m-4">



                <header class="bg-[#614883]/40 font-normal text-[#614883] py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-2xl flex gap-2 justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>

                    
                    Edit Category
                </header>

                {{-- @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach --}}

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ url('categories/'.$category->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    @method('put')

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-sm font-bold mb-2 sm:mb-4">
                            Name:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror border-2 border-[#614883]/40"
                            name="name" value="{{ old('name', $category->name) }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap items-center justify-center bordered border-[#614883]/40 p-2 border-2 rounded-lg @error('photo') border-red-500 @enderror">
                        <img id="preview"  class="rounded-lg" src="{{ asset($category->image) }}" width="200px">
                    </div>

                    <div class="flex flex-wrap">
                        
                        <label for="image" class="block text-sm font-bold mb-2 sm:mb-4">
                            Image:
                        </label>

                        <button type="button" class="btn-upload w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-[#614883] sm:py-4 flex gap-2 items-center justify-center hover:scale-105 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                            Upload Image
                        </button>

                        <input id="photo" type="file"
                            class="hidden form-input w-full @error('image') border-red-500 @enderror" name="image"
                            value="{{ old('image') }}" accept="image/*">

                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="description" class="block text-sm font-bold mb-2 sm:mb-4">
                            Description:
                        </label>

                        <textarea id="description" class="form-input w-full @error('description')  border-red-500 @enderror border-2 border-[#614883]/40"
                            name="description" required>{{ old('description', $category->description) }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap pb-6">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-[#614883] hover:scale-105 transition sm:py-4">
                            Save
                        </button>

                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
