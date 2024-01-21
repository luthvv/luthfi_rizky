@extends('layouts.backend')

@section('title')
    Website Dashboard
@endsection

@section('content')
    <div class="flex flex-wrap gap-5">
        @for ($i = 0; $i < 5; $i++)
            <x-backend.card />
        @endfor
    </div>
    <a href="{{ route('backend.projects.website.create') }}"
        class="fixed bg-blue-500 hover:bg-blue-700 text-white font-bold sm:py-3 sm:px-4 p-[10px] rounded-md sm:right-10 sm:bottom-10 right-5 bottom-5 sm:text-lg">
        <i class="fa-solid fa-plus"></i>
        <div class="inline ml-2">Add Website</div>
    </a>
@endsection
