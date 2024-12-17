@extends('layouts.admin')

@section('title', 'Tambahkan Pengguna')

@section('content')
    <x-h1 class="width-full flex-center margin-bottom-40px">Tambahkan User Baru</x-h1>

    <form
        class="flex-center flex-column"
        method="POST"
        action="{{ route('users.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="flex-column">
            <x-label class="margin-bottom-7px" required>Nama Lengkap</x-label>
            <x-input.text placeholder="......." name="name" value="{{ old('name') }}" />

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px" required>Email</x-label>
            <x-input.email placeholder="......" name="email" value="{{ old('email') }}"/>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px" required>Password</x-label>
            <x-input.password placeholder="......" name="password" />

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex-column margin-top-20px">
            <x-label class="margin-bottom-7px">Role</x-label>
            <x-input.select name="role_id" required>
                <option selected disabled hidden>Pilih role</option>
                @if($roles && count($roles) > 0)
                    @foreach($roles as $title => $id)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                @else
                    <option value="">No roles available</option>
                @endif
            </x-input.select>

            @error('role_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <x-button.create class="margin-top-40px">Tambahkan</x-button.create>
    </form>
@endsection

