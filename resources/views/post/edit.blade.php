@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Post</div>
                    <div class="card-body">

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <form method="post" action="{{ route('posts.update', $post) }}">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}"/>
                            </div>
                            <div class="form-group">
                                <label class="label">Post Body: </label>
                                <textarea name="body" class="form-control" rows="5">{{ $post->body }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update post"/>
                            </div>
                        </form>

                        <form method="post" action="{{ route('posts.destroy', $post) }}">
                            @method('delete')
                            @csrf
                            <div class="form-group float-right" >
                                <input type="submit" class="btn btn-danger" value="Delete post"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
