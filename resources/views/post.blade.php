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
    <h3>{{ $post->author }}</h3>
    <p> {{ $post->body }}</p>
</article>
<a href="/posts">Back To Posts</a>


@endsection