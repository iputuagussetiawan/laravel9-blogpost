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
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table align-middle">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $no=1;
                ?>
                @foreach ($posts as $post )
                <tr>
                    <th scope="row">{{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>
                        <a href="/backend/posts/{{ $post->slug }}">Detail</a>
                        <a href="/backend/posts/{{ $post->slug }}">Edit</a>
                        <a href="/backend/posts/{{ $post->slug }}">Delete</a>
                    </td>
                </tr>
                <?php $no++;?>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>
<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>
<!-- end row -->
@endsection