@extends('layouts.main')
@section('container')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ $title }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                    <li class="breadcrumb-item active">Cards</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    @foreach ($posts as $post )
    <div class="col-md-6 col-xl-3">
        <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('backend/assets/images/small/img-1.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"> {{ $post['title'] }} </h4>
                <p> By : <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a></p>
                <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
                <p class="card-text">{{ $post['excerpt'] }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary waves-effect waves-light">Read more..</a>
            </div>
        </div>
    </div><!-- end col -->
    @endforeach
</div>
<!-- end row -->
@endsection