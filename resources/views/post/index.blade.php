@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <a class="btn btn-primary btn-lg" href="{{ route('posts.create') }}">Create new post</a>
                <table class="table table-striped">
                    <thead>
                    <th>No</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">Read Post</a>
                                <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-sm btn-warning py-0" style="font-size: 0.8em;">Edit Post</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
