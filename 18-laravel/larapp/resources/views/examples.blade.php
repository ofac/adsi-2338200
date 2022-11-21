@extends('layouts.app')

@section('title', 'Examples Blade')

@section('content')
    <div class="text-[#231832] bg-white/60 w-[480px] p-4 rounded mx-auto my-10">
        <h1 class="mt-4 text-center font-semibold text-4xl">Examples Blade</h1>
        <h2 class="mt-10 text-center font-semibold text-2xl">If - ElseIf - Else </h2>
        @if (date('l') == 'Monday')
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Monday</h3>
        @elseif(date('l') == 'Tuesday')
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Tuesday</h3>
        @elseif(date('l') == 'Wednesday')
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Wednesday</h3>
        @elseif(date('l') == 'Thursday')
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Thursday</h3>
        @elseif(date('l') == 'Friday')
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Friday</h3>
        @else 
            <h3 class="text-center mt-4 border border-[#231832] bg-white/60 p-4 rounded">Today is: Saturday or Sunday</h3>
        @endif
        {{--  --}}
        <h2 class="mt-10 text-center font-semibold text-2xl">Switch</h2>
    </div>
@endsection