@extends('layouts.app')

@section('title', 'Examples Blade')

@section('content')
    <div class="text-[#231832] bg-white/60 w-[480px] p-4 rounded mx-auto my-10">

        <h2 class="text-3xl text-center my-10 font-semibold">
        Conditionals: if - elseif - else
    </h2>
    @php $ndayweek = date('w'); @endphp
    @if ($ndayweek == 1)
        <h3 class="text-center text-2xl font-normal p-4"> 
            Today: is Monday 🙃 
        </h3>
    @elseif($ndayweek == 2)
        <h3 class="text-center text-2xl font-normal p-4"> 
            Today: is Tuesday 😀 
        </h3>
    @else
        <h3 class="text-center text-2xl font-normal p-4"> 
            Today: is any day after Tuesday 😁 
        </h3>
    @endif
    {{-- - - - --}}
    <h2 class="text-3xl text-center my-10 font-semibold">
        Conditionals: switch
    </h2>
    @php $hour = date('H') @endphp
    @switch($hour)
        @case(1)
        @case(2)
        @case(3)
        @case(4)
        @case(5)
        @case(6)
            <h3 class="text-center text-2xl font-normal p-4"> 
                It's too early 🤪 
            </h3>
            @break
        @case(7)
        @case(8)
        @case(9)
        @case(10)
        @case(11)
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good morning guys 🤗
            </h3>
            @break
        @case(12)
        @case(13)
        @case(14)
        @case(15)
        @case(16)
        @case(17)
        @case(18)
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good evening 😯 
            </h3>
            @break
        @default
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good night 😵‍💫
            </h3>
    @endswitch
    {{-- - - - --}}
    <h2 class="text-3xl text-center my-10 font-semibold">
        Loops: foreach
    </h2>
    @php $colors = ['red', 'green', 'blue'] @endphp
    <ol class="list-decimal flex flex-col gap-4 items-center">
        @foreach ($colors as $color)
            <li class="text-2xl font-bold" style="color: {{ $color }}">
                {{ $color }}
            </li>
        @endforeach
    </ol>
    {{-- - - - --}}
    <h2 class="text-3xl text-center my-10 font-semibold">
        Loops: for
    </h2>
    <ul class="flex flex-row gap-4 mx-auto justify-center">
        @for ($i = 0; $i < 40; $i++)
                @if ($i % 5 == 0)
                    <li class="bg-blue-900 text-white p-2 rounded-2xl"> 
                        {{ $i }}
                    </li>
                @endif
        @endfor
    </ul>
    {{-- - - - --}}
    <h2 class="text-3xl text-center my-10 font-semibold">
        Loops: forelse
    </h2>
    @php 
        // $emojis = ['😭', '😡', '😤'] 
        $emojis = []
    @endphp
    @forelse ($emojis as $emoji)
        {{ $emoji }}
    @empty
        <h3 class="text-center text-2xl font-normal p-4"> 
                Sorry! no emojies 🤓
        </h3>
    @endforelse
    {{-- - - - --}}
    <h2 class="text-3xl text-center my-10 font-semibold">
        Loops: while
    </h2>
    <ul class="flex flex-row gap-4 mx-auto justify-center pb-10">
        @php $i = 0 @endphp
        @while ($i < 50)
            @if ($i % 10 == 0)
                <li class="bg-green-900 text-white p-2 rounded-2xl"> 
                    {{ $i }}
                </li>
            @endif
            @php $i++ @endphp
        @endwhile
    </ul>
    </div>

@endsection