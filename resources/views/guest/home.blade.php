@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <h1>Segui i miei post</h1>
        @forelse ($posts as $post)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                    <div class="clearfix">
                        <img class="float-start me-2" src="{{ $post->image }}" alt="{{ $post->title }}">
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        @empty
            <h3 class="text-center">Non ci sono post</h3>
        @endforelse
    </div>
@endsection
