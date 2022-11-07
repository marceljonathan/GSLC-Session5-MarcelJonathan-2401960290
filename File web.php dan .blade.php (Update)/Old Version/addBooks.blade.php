@extends('template')

@section('title', 'Add Books')

{{-- @include('viewTable') --}}

@section('content')
    <h1>Add Books</h1>

    <form action="{{route('add_books_logic')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Content Url</label>
            <input type="url" class="form-control" id="" name="content_url">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Content Type</label>
            <input type="text" class="form-control" id="" name="content_type">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Author</label>
            <input type="text" class="form-control" id="" name="author">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input type="text" class="form-control" id="" name="description">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="number" class="form-control" id="" name="ISBN">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Price</label>
            <input type="number" class="form-control" id="" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
@endsection
