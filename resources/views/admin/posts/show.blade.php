@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <header>
        <h1>{{ $post->title }}</h1>
    </header>
    <hr>
    <div class="clearfix">
        @if ($post->image)
            <img class="float-start me-2 img-fluid" width="250" src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->title }}">
        @endif
        <p>{{ $post->content }}</p>
        <div>
            <strong>Creato il:</strong> {{ $post->created_at }}
            <strong>Ultima modifica:</strong> {{ $post->updated_at }}
        </div>
    </div>
    <hr>
    <footer class="d-flex justify-content-between">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Torna alla lista</a>
        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-outline-warning">
                <i class="fas fa-pencil"></i> Modifica
            </a>
            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="delete-form ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger">
                    <i class="fas fa-trash"></i> Elimina
                </button>
            </form>
        </div>
    </footer>
@endsection
@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
