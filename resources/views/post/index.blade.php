@extends('layouts.frontend.master')
@section('content')
    <div class="container">
        <h1>All Posts</h1>
        <div class="row gy-4">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fluid" src="{{ asset($post->image) }}" alt="">
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                            <h4>{{ $post->title }}</h4>
                            <p>{{ Str::limit($post->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
