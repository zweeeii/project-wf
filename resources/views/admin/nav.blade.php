@php
    $url = Request::url();

    $usersActive         = $url === route('users.index');
    $booksActive         = $url === route('books');
    $authorsActive       = $url === route('authors');
    $rolesActive         = $url === route('roles.index');
    $borrowedBooksActive = $url === route('borrowed-books.index');

    $links = [
        [
            'name' => 'List User',
            'route' => 'users.index',
            'active' => $usersActive
        ],
        [
            'name' => 'List Buku',
            'route' => 'books',
            'active' => $booksActive
        ],
        [
            'name' => 'List Author',
            'route' => 'authors',
            'active' => $authorsActive
        ],
        [
            'name' => 'List Role',
            'route' => 'roles.index',
            'active' => $rolesActive
        ],
        [
            'name' => 'List Buku Yang Dipinjam',
            'route' => 'borrowed-books.index',
            'active' => $borrowedBooksActive
        ],
    ];
@endphp

<nav class="nav">
    <a href="/" class="nav__left" draggable="false">
        <x-logo />
    </a>

    <div class="nav__right nav__elem--floor" style="margin-bottom: 20px">
        @foreach($links as $link)
            <a class="nav__a {{ $link['active'] ? 'nav__a--active' : '' }}" href="{{ route($link['route']) }}">
                {{ $link['name'] }}
            </a>
        @endforeach
    </div>
</nav>

