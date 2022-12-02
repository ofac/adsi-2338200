@extends('layouts.app')
@section('title', 'LARAPP - [Home Page]')

@section('content')
    <div class="mt-20 px-10 text-[#614883]">
        <div class="">
            <h3 class="text-3xl font-medium my-4 flex items-center justify-center gap-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                Important Games
            </h3>
            <div class="owl-carousel owl-theme">
                @foreach ($sliders as $slider)
                    <div class="slider h-[600px] bg-cover bg-no-repeat bg-top" style="background-image: url({{ asset($slider->image) }})">
                        <p class="bg-black/75 text-white px-4 py-8 w-full absolute bottom-0">
                            {{ $slider->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="mt-20 px-10 text-[#614883]">
        <div class="flex items-center justify-center flex-col gap-2">
             <h3 class="text-3xl font-medium my-4 flex items-center justify-center gap-2">  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                Filter Game by Category
            </h3>
            @csrf
            <select id="idcat" class="form-select w-60">
                <option value="0">All Categories</option>
                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {{--  --}}
    <div class="loader hidden flex justify-center items-center my-10">
        <img src="{{ asset('images/loader.svg') }}" alt="">
    </div>
    <div class="mt-20 pb-20">
        <div id="content" class="flex items-center justify-center flex-col gap-4">
            @foreach ($cats as $cat)
            @if (count($cat->games) > 0)
                <h3 class="mt-5"> 
                    <img src="{{ asset($cat->image) }}" width="120px"> 
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-center gap-4">
                @foreach ($games as $game)
                    @if ($game->category_id == $cat->id)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="h-40 object-cover w-full" src="{{ asset($game->image)  }}" alt="{{ $game->name }}">
                        <div class="px-6 py-4 bg-white/60 text-[#614883]">
                            <div class="font-bold text-xl mb-2">{{ $game->name }}</div>
                            <p class="text-base">
                            {{ $game->description }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2 bg-[#614883]/60">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-[#614883] mr-2 mb-2">
                                @php
                                    $td = \Carbon\Carbon::now();
                                    $dt = \Carbon\Carbon::parse($game->created_at);
                                @endphp
                                <strong>Created at:</strong> {{ $td->diffForHumans($dt, 1) }}
                            </span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-[#614883] mr-2 mb-2">
                                $ {{ $game->price }}
                            </span>
                        </div>
                    </div>
                    
                    @endif
                @endforeach
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection