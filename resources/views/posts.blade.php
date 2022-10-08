@extends('layouts.main')
@section('container')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ $title }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <a href="posts/create" class="btn btn-primary mb-3">New Post</a>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <form action="/posts" method="get">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-5">
                <input type="text" name="search" id="search" value="{{ request('search') }}" class="form-control" placeholder="Search...">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
    @foreach ($posts as $post )
    <div class="col-md-6 col-xl-3">
        <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('backend/assets/images/small/img-1.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"> {{ $post['title'] }} </h4>
                <p> By : <a href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a></p>
                <p>in : <a href="/posts?category={{$post->category->slug}}">{{ $post->category->name }}</a></p>
                <p>in : {{$post->created_at->diffForHumans()  }}</p
                <p class="card-text">{{ $post['excerpt'] }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary waves-effect waves-light">Read more..</a>
            </div>
        </div>
    </div><!-- end col -->
    @endforeach
</div>
<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>
<!-- end row -->
@endsection