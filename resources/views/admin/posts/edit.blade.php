@extends('layouts.app')
@section('title', 'Create Post')

@section('content')
    <header class="d-flex justify-content-between align-items-center">
        <h1>Modifica Post</h1>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Torna indietro
        </a>
    </header>
    <hr>
    @include('includes.posts.form')
@endsection

@section('scripts')
    @vite('resources/js/slug-generator.js')
    {{-- @vite('resources/js/image-previewer.js') --}}
@endsection
