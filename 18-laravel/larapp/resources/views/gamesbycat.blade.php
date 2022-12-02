@if (isset($cat))

        <h3 class="mt-5"> 
            <img src="{{ asset($cat->image) }}" width="120px"> 
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-center gap-4">
        @foreach ($games as $game)
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
        @endforeach
        </div>
@else
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
@endif