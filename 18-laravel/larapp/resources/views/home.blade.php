@extends('layouts.app')
@section('title', 'LARAPP - Dashboard')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="bg-[#614883]/40 font-normal text-[#614883] py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-2xl flex gap-2 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Dashboard
            </header>

            <div class="w-full p-6 flex lg:flex-row flex-col  items-center gap-8 my-6">
                {{--  --}}
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="{{ asset('images/mod-users.png') }}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 text-2xl flex gap-2 items-center font-bold text-[#614883]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            Users
                        </h2>
                        <p class="text-[#614883]">Admin users</p>
                        <a href="{{ url('users') }}" class="p-4 bg-[#614883] text-white text-center rounded-md md:w-28 w-full hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>
                {{--  --}}
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="{{ asset('images/mod-cats.png') }}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 flex gap-2 items-center text-2xl font-bold text-[#614883]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                            </svg>
                            Categories
                        </h2>
                        <p class="text-[#614883]">Admin categories</p>
                        <a href="{{ url('categories') }}" class="p-4 bg-[#614883] text-white text-center rounded-md md:w-28 w-full hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>
                {{--  --}}
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="{{ asset('images/mod-games.png') }}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 flex gap-2 items-center text-2xl font-bold text-[#614883]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                            </svg>
                            Games
                        </h2>
                        <p class="text-[#614883]">Admin games</p>
                        <a href="{{ url('games') }}" class="p-4 bg-[#614883] text-white text-center rounded-md md:w-28 w-full hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>

                {{--  --}}
            </div>
        </section>
    </div>
</main>
@endsection
