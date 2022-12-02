<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        
        <header class="bg-[#614883] py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="flex justify-center items-center gap-4">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline flex gap-2 justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        </svg>
                        {{ config('app.name', 'Larapp') }}
                    </a>
                    @auth()
                        <a href="{{ url('home') }}" class="sm:flex hidden no-underline text-white gap-2 justify-center items-center bg-black/50 py-1 px-4 rounded-full hover:scale-110 hover:bg-black/70 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Dashboard
                        </a>
                    @endauth
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base flex items-center">
                    @guest
                        <div class="select-lang hidden gap-1 sm:flex">
                            <a href="{{ url('locale/es') }}">
                                <img src="{{ asset('images/es.png') }}" class="rounded-full p-1 bg-black/50 hover:scale-110 hover:bg-black/70 transition  @if(session()->get('locale') == 'es') opacity-100 @else opacity-50 @endif">
                            </a>
                            <a href="{{ url('locale/en') }}">
                                <img src="{{ asset('images/en.png') }}" class="rounded-full p-1 bg-black/50 hover:scale-110 hover:bg-black/70 transition @if(session()->get('locale') == 'en') opacity-100 @else opacity-50 @endif">
                            </a>
                        </div>
                        {{--  --}}
                        <a class="no-underline flex gap-2 justify-center items-center bg-black/50 py-1 px-4 rounded-full hover:scale-110 hover:bg-black/70 transition" href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            {{ __('general.login-title') }}
                        </a>
                        @if (Route::has('register'))
                            <a class="no-underline flex gap-2 justify-center items-center bg-black/50 py-1 px-4 rounded-full hover:scale-110 hover:bg-black/70 transition" href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                                {{ __('general.btn-register') }}
                            </a>
                        @endif
                    @else
                        <img src="{{ asset(Auth::user()->photo) }}" class="w-10">
                        <span>{{ Auth::user()->fullname }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline flex gap-2 justify-center items-center bg-black/50 py-1 px-4 rounded-full hover:scale-110 hover:bg-black/70 transition"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')

        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.js') }}"></script>
        <script>
            // - - -
            $('.btn-upload').click(function() {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
            // - - -
            @if (session('message'))
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '{{ session('message') }}',
                    showConfirmButton: false,
                    timer: 3500
                })
            @endif
            // - - -
            @if (session('error'))
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 4000
                });
            @endif 
            // - - -
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#614883',
                    cancelButtonColor: '#8F2923',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                    // - - -
                })
                // S e a r c h - - -
                $('body').on('keyup', '#table-search', function (e) {
                    e.preventDefault()
                    $q = $(this).val()
                    $t = $('input[name=_token]').val()
                    $m = $('#tmodel').val()

                    $('.loader').removeClass('hidden')
                    $('.table').hide()

                    $sto = setTimeout(function() {
                        clearTimeout($sto)
                        $.post($m + '/search', 
                            {q: $q, _token: $t},
                            function (data) {
                                $('.loader').addClass('hidden')
                                $('#content').html(data)
                                $('.table').fadeIn('slow')
                            }
                        )
                    }, 2000)
                    })
                    // - - -
                    $('.btn-file').click(function() {
                        $('#file').click();
                    });
                    $('#file').change(function(event) {
                        $(this).parent().submit();
                    });
                // - - -
        </script>
    </div>
</body>
</html>
