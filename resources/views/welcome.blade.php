<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Store</title>

    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/font-awesome.min.css',
        'resources/js/font-awesome.min.js'
    ])
</head>
<body>
    @include('nav')

    <main id="app">
        <section class="grid_1x2_1fr">
            <section class="flex-column">
                <div style="margin-top: 100px">
                    <x-h1>Web Framework Project </x-h1>
                    <x-h2>Rental Buku Digital</x-h2>
                </div>

                @auth
                    <a class="margin-block-20px" href="{{ route('home') }}">
                        <x-button.create>
                            List Buku
                        </x-button>
                    </a>
                @else
                    <a class="margin-block-20px" href="{{ route('register') }}">
                        <x-button>
                            Daftar
                        </x-button>
                    </a>
                @endauth


            </section>
            <section>
                <img
                    class="landing-book-poster"
                    src="{{ Vite::image('logo/0.png') }}"
                    alt="Book"
                    draggable="false"
                />
            </section>
        </section>
    </main>

    @include('footer')
</body>
</html>
