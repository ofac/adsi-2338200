@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 sm:w-[40rem] w-full">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white/80 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg m-4">

                <header class="bg-[#614883]/40 font-normal text-[#614883] py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-2xl flex gap-2 justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    
                    Add User
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 text-[#614883]" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="fullname" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-fullname'):
                        </label>

                        <input id="fullname" type="text" class="form-input w-full @error('fullname')  border-red-500 @enderror border-2 border-[#614883]/40"
                            name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>

                        @error('fullname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-email'):
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror border-2 border-[#614883]/40" name="email"
                            value="{{ old('email') }}" required>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-phone'):
                        </label>

                        <input id="phone" type="number"
                            class="form-input w-full @error('phone') border-red-500 @enderror border-2 border-[#614883]/40" name="phone"
                            value="{{ old('phone') }}" required>

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="birthdate" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-birthdate'):
                        </label>

                        <input id="birthdate" type="date"
                            class="form-input w-full @error('birthdate') border-red-500 @enderror border-2 border-[#614883]/40" name="birthdate"
                            value="{{ old('birthdate') }}" required>

                        @error('birthdate')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-gender'):
                        </label>
                        
                        <select name="gender" id="gender" class="form-select w-full @error('gender') border-red-500 @enderror border-2 border-[#614883]/40" required>
                            <option value="" disabled>@lang('general.select-gender')...</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="address" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-address'):
                        </label>

                        <input id="address" type="text"
                            class="form-input w-full @error('address') border-red-500 @enderror border-2 border-[#614883]/40" name="address"
                            value="{{ old('address') }}" required>

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--  --}}
                    <div class="flex flex-wrap">
                        <label for="password" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-password'):
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror border-2 border-[#614883]/40" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-confirm-pass'):
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full border-2 border-[#614883]/40"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

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
