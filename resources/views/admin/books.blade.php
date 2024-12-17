@extends('layouts.admin')

@section('title', 'List Buku')

@section('content')
    <x-h1 class="width-full flex-center margin-bottom-40px">List Buku:</x-h1>

    @if($books->count() == 0)
        <x-h3 class="width-full flex-center">Tidak Ada Buku</x-h3>
    @else
        <x-table.container>
            <x-table class="table--1000px">
                <x-table.tr class="table__tr--head">
                    <x-table.td class="table__td--head">
                        ID
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Judul
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Status
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Dipublish Pada
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Diupdate Pada
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Edit
                    </x-table.td>
                    <x-table.td class="table__td--head">
                        Delete
                    </x-table.td>
                </x-table.tr>

                @foreach($books as $book)
                    <x-table.tr>
                        <x-table.td>
                            {{ $book['id'] }}
                        </x-table.td>
                        <x-table.td>
                            <a class="a" href="{{ route('books.show', $book['id']) }}">
                                {{ $book['title'] }}
                            </a>
                        </x-table.td>
                        <x-table.td>
                            {{ $book['available'] == 1 ? "Tersedia" : "Dipinjam" }}
                        </x-table.td>
                        <x-table.td>
                            {{ $book['created_at'] }}
                        </x-table.td>
                        <x-table.td>
                            {{ $book['updated_at'] }}
                        </x-table.td>
                        <x-table.td class="return-link  table__td--text_center">
                            <a
                                class="a--blue"
                                href="{{ route('books.edit', $book['id']) }}"
                            >
                                <i class="fa fa-pen"></i>
                            </a>
                        </x-table.td>
                        <x-table.td class="return-link  table__td--text_center">
                            <x-button.link
                                class="a--red-danger"
                                route-name="books.destroy"
                                route-param="{{ $book['id'] }}"
                                form-id="delete-book-form-{{ $book['id'] }}"
                                method="DELETE"
                            >
                                <i class="fa fa-trash"></i>
                            </x-button.link>
                        </x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table>
        </x-table.container>
    @endif

    <section class="flex-center margin-top-60px">
        <a href="{{ route('books.create') }}">
            <x-button.create>
                Tambahkan Buku
            </x-button.create>
        </a>
    </section>
@endsection

