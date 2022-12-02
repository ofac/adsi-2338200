@extends('layouts.app')
@section('title', 'LARAPP - All Games')

@section('content')
    <div class="m-4">
    <h1 class="text-[#614883] text-center my-10 font-bold text-4xl flex justify-center items-center gap-2"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
        </svg>
        All Games 
    </h1>
    <a href="{{ route('games.create') }}" class="bg-green-700 text-white p-4 rounded-md my-10 mx-auto flex justify-center items-center gap-2 w-96 hover:bg-green-600 hover:scale-105 transition ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
        </svg>
        Add Game
    </a>
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-10/12 mx-auto bg-white/60">
    <div class="p-4">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1 flex gap-2 items-center">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>

            <input type="hidden" id="tmodel" value="games">
            <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-80 pl-10 p-2.5" placeholder="Search for games">
        </div>
    </div>
    <div class="loader hidden flex justify-center items-center my-10">
        <img src="{{ asset('images/loader.svg') }}" alt="">
    </div>
    <table class="table bg-white/60 w-full text-sm text-left text-[#614883]">
        <thead class="text-xs text-white uppercase bg-[#614883]">
            <tr>
                <th class="px-6 py-3">ID</th>
                <th class="px-6 py-3">NAME</th>
                <th class="px-6 py-3">IMAGE</th>
                <th class="px-6 py-3 lg:table-cell hidden">CATEGORY</th>
                <th class="px-6 py-3 lg:table-cell hidden">SLIDER</th>
                <th class="px-6 py-3">ACTIONS</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach ($games as $game)
                <tr class="even:bg-white/40">
                    <td class="px-6 py-3">{{ $game->id }}</td>
                    <td class="px-6 py-3">{{ $game->name }}</td>
                    <td class="px-6 py-3">
                        <img src="{{ asset($game->image) }}" class="w-8 rounded">
                    </td>
                    <td class="px-6 py-3 lg:table-cell hidden">
                        <img src="{{ asset($game->category->image) }}" alt="" width="60px">
                    </td>
                    <td class="px-6 py-3 lg:table-cell hidden">
                        @if ($game->slider == 1)
                        <button class="bg-green-600 p-2 rounded-md text-white w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    @else
                        <button class="bg-red-800 p-2 rounded-md text-white w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    @endif
                    </td>
                    <td class="px-6 py-3 flex items-center justify-center gap-1">
                        <a href="{{ url('games/'.$game->id) }}" class="w-6 h-6 bg-[#614883] flex justify-center items-center text-white rounded hover:scale-105 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                        <a href="{{ url('games/'.$game->id.'/edit') }}" class="w-6 h-6 bg-[#614883] flex justify-center items-center text-white rounded hover:scale-105 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </a>
                        <form action="{{ url('games/'.$game->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn-delete w-6 h-6 bg-red-800 flex justify-center items-center text-white rounded hover:scale-105 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="text-center">
                    <div class="flex justify-center items-center py-4">
                        {{ $games->links() }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
    
@endsection