@extends('layouts.app')
@section('title', 'Posts')
@section('content')
    <header class="d-flex align-items-center justify-content-between">
        <h1>Posts</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-success">Nuovo Post</a>
    </header>
    <hr>
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Creato il</th>
                <th scope="col">Ultima modifica</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->type?->label }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-warning ms-2">
                                <i class="fas fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                class="delete-form ms-2">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="6">
                        <h3>Non ci sono post</h3>
                    </td>
                </tr>
            @endforelse


        </tbody>
    </table>
    @if ($posts->hasPages())
        {{ $posts->links() }}
    @endif
@endsection
@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
