@extends('layouts.main')
@section('container')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Posts</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                    <li class="breadcrumb-item active">Cards</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<article>
    <h2>
        {{ $post->title }}</a>     
    </h2>
    <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
    <p> By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
    {!! $post->body !!}
</article>
<a href="/posts">Back To Posts</a>


@endsection