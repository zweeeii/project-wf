@extends('layouts.admin')

@section('title', 'Tambahkan Role')

@section('content')
    <x-h1 class="width-full flex-center margin-bottom-40px">Tambahkan Role Baru</x-h1>

    <form class="flex-center flex-column" method="POST" action="{{ route('roles.store') }}">
        @csrf

        <div class="flex-column">
            <x-label class="margin-bottom-7px">Title Role</x-label>
            <x-input.text placeholder="......." name="title" />
        </div>

        <x-button.create class="margin-top-40px">Tambahkan</x-button.create>
    </form>
@endsection

