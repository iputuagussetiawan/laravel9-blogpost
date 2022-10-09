@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Create New Post</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" action="/posts/create">
                    @csrf
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Title" id="title" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Slug" id="slug" name="slug" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                           <select class="form-select" id="category_id" name="category_id">
                            @foreach ( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                            @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                           <select class="form-select" id="category_id" name="category_id">
                            @foreach ( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                            @endforeach
                           </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        console.log('tests');
        fetch('/backend/posts/checkslug?title='+ title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');
        imagePreview.style.display = 'block'
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection