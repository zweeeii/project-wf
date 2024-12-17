@extends('layouts.admin')

@section('title', 'Edit Buku')

@section('content')
    <x-h1 class="width-full flex-center margin-bottom-40px">Edit Book</x-h1>

    <form
        class="flex-center flex-column"
        method="POST"
        action="{{ route('books.update', $id) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div class="flex-column width-368px">
            <x-label class="margin-bottom-7px">Cover</x-label>
            <x-input.picture name="cover" class="flex-center margin-inline-auto width-200px">
                Pilih Gambar
            </x-input.picture>

            @error('cover')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px" required>Judul</x-label>
            <x-input.text placeholder="......." name="title" value="{{ $title }}" />

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px">Deksripsi / Sinopsis </x-label>
            <x-input.textarea placeholder="......." name="describtion">
                {{ $describtion }}
            </x-input.textarea>

            @error('describtion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px">Author</x-label>
            <x-input.select name="author_id" required>
                <option selected disabled hidden>Pilih author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" @selected($author_id === $author->id)>{{ $author->name }}</option>
                @endforeach
            </x-input.select>
        </div>



        <x-button.create class="margin-top-40px">Update</x-button.create>
    </form>
@endsection

