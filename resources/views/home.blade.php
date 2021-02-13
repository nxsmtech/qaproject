@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ 'Welcome, ' . auth()->user()->last_name . '! ' . __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Select Project') }}</div>

                <div class="card-body">
                    <a href="{{ route('posts.index') }}">Posts project</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
