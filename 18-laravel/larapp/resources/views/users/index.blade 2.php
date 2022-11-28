@extends('layouts.app')
@section('title', 'LARAPP - All Users')

@section('content')
    <div class="m-10">
    <h1 class="text-[#614883] text-center my-10 font-bold text-4xl flex justify-center items-center gap-2"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
        </svg>
        All Users 
    </h1>
    <a href="{{ route('users.create') }}" class="bg-green-700 text-white p-4 rounded-md my-10 mx-auto flex justify-center items-center gap-2 w-96 hover:bg-green-600 hover:scale-105 transition  ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
        </svg>
        Add User
    </a>
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
        <tbody>
            @foreach ($users as $user)
                <tr class="even:bg-white/40">
                    <td class="px-6 py-3">{{ $user->id }}</td>
                    <td class="px-6 py-3">{{ $user->fullname }}</td>
                    <td class="px-6 py-3 lg:table-cell hidden">{{ $user->email }}</td>
                    <td class="px-6 py-3">
                        <img src="{{ asset($user->photo) }}" class="w-8">
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
                        <form action="{{ url('users'.$user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="w-6 h-6 bg-red-800 flex justify-center items-center text-white rounded hover:scale-105 transition">
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
                        {{ $users->links() }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    </div>
    
@endsection