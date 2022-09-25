@extends('layouts.main')
@section('container')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Posts Category : {{ $title }}</h4>
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

    @foreach ($categories as $category )
    <ul>
        <li>
            <a href="posts/?category={{ $category->slug }}">  {{ $category->name }}</a>    
        </li>
    </ul>
    @endforeach

<!-- end row -->
@endsection