@forelse ($users as $user)
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

@empty
    <tr>
        <td colspan="7" class="text-center p-2 text-md">
            <span>No Results</span>
        </td>
    </tr>
@endforelse