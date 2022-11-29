@extends('layouts.app')
@section('title', 'LARAPP - All Users')

@section('content')
    <div class="m-4">
    <h1 class="text-[#614883] text-center my-10 font-bold text-4xl flex justify-center items-center gap-2"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
        </svg>
        All Users 
    </h1>
    <a href="{{ route('users.create') }}" class="bg-green-700 text-white p-4 rounded-md my-10 mx-auto flex justify-center items-center gap-2 w-96 hover:bg-green-600 hover:scale-105 transition ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
        </svg>
        Add User
    </a>
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-10/12 mx-auto bg-white/60">
    <div class="p-4">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1 flex gap-2 items-center">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>

            <input type="hidden" id="tmodel" value="users">
            <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5" placeholder="Search for users">

            <a href="{{ url('export/users/pdf') }}" class="bg-[#614883] text-white rounded-md p-2 w-38 text-center flex gap-2 items-center hover:scale-105 transition-all duration-500"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                </svg>
                <span class="sm:block hidden">Export PDF</span>
            </a>
            <a href="{{ url('export/users/excel') }}" class="bg-[#614883] text-white rounded-md p-2 w-38 text-center flex gap-2 items-center hover:scale-105 transition-all duration-500"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                </svg>
                <span class="sm:block hidden">Export Excel</span>
            </a>
            <form action="{{ url('import/users') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file" class="hidden" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                    <button type="button" class="btn-file bg-[#614883] text-white rounded-md p-2 w-38 text-center flex gap-2 items-center hover:scale-105 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                        </svg>
                        <span class="sm:block hidden">Import Excel</span>
                    </button>
                </form>
        </div>
    </div>
    <div class="loader hidden flex justify-center items-center my-10">
        <img src="{{ asset('images/loader.svg') }}" alt="">
    </div>
    <table class="table bg-white/60 w-full text-sm text-left text-[#614883]">
        <thead class="text-xs text-white uppercase bg-[#614883]">
            <tr>
                <th class="px-6 py-3">ID</th>
                <th class="px-6 py-3">FULLNAME</th>
                <th class="px-6 py-3 lg:table-cell hidden">EMAIL</th>
                <th class="px-6 py-3">PHOTO</th>
                <th class="px-6 py-3 lg:table-cell hidden">ROLE</th>
                <th class="px-6 py-3 lg:table-cell hidden">ACTIVE</th>
                <th class="px-6 py-3">ACTIONS</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach ($users as $user)
                <tr class="even:bg-white/40">
                    <td class="px-6 py-3">{{ $user->id }}</td>
                    <td class="px-6 py-3">{{ $user->fullname }}</td>
                    <td class="px-6 py-3 lg:table-cell hidden">{{ $user->email }}</td>
                    <td class="px-6 py-3">
                        <img src="{{ asset($user->photo) }}" class="w-8 rounded-full">
                    </td>
                    <td class="px-6 py-3 lg:table-cell hidden">{{ $user->role }}</td>
                    <td class="px-6 py-3 lg:table-cell hidden">{{ $user->active }}</td>
                    <td class="px-6 py-3 flex items-center justify-center gap-1">
                        <a href="{{ url('users/'.$user->id) }}" class="w-6 h-6 bg-[#614883] flex justify-center items-center text-white rounded hover:scale-105 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="w-6 h-6 bg-[#614883] flex justify-center items-center text-white rounded hover:scale-105 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </a>
                        <form action="{{ url('users/'.$user->id) }}" method="post">
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
                <td colspan="7" class="text-center">
                    <div class="flex justify-center items-center py-4">
                        {{ $users->links() }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
    
@endsection