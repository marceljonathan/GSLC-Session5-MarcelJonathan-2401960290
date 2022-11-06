<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    @include('header2')

    <h1>Update Book</h1>

    <form action="{{route('update_books_logic', ['id' => $books->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Content Url</label>
            <input type="url" value="{{ $books->content_url }}" class="form-control" id="" name="content_url">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Content Type</label>
            <input type="text" value="{{ $books->content_type }}" class="form-control" id="" name="content_type">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Title</label>
            <input type="text" value="{{ $books->title }}" class="form-control" id="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Author</label>
            <input type="text" value="{{ $books->author }}" class="form-control" id="" name="author">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <label for="floatingTextarea2">Description</label>
                <input type="description" value="{{ $books->description }}" class="form-control" id="" name="author">
                {{-- <textarea name="description" type="long text" value="{{ $books->description }}"  class="form-control" placeholder="Type Book Description here" id="floatingTextarea2" style="height: 100px"></textarea> --}}
              </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="number" value="{{ $books->ISBN }}" class="form-control" id="" name="ISBN">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Price</label>
            <input type="number" value="{{ $books->price }}" class="form-control" id="" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
    <br>
    <form action="{{route('add_books_view')}}">
        <button type="submit" class="btn btn-danger">Cancel Update</button>
    </form>
</body>
</html>
