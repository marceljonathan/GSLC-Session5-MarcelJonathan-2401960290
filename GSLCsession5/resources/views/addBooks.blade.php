<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Add Book</h1>

    <form action="{{route('add_books_logic')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Content Url</label>
            <input type="url" class="form-control" id="" name="content_url" placeholder="Book cover url">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Content Type</label>
            <input type="text" value="image" class="form-control" id="" name="content_type" placeholder="Image or video">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="" name="title" placeholder="Ex: Laut Bercerita, Melangkah, ...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Author</label>
            <input type="text" class="form-control" id="" name="author" placeholder="Ex: Tere Liye, Dewi Lestari, ...">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <label for="floatingTextarea2">Description</label>
                <textarea name="description" type="long text" class="form-control" placeholder="Type book description here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="number" class="form-control" id="" name="ISBN" placeholder="13 digits of International Standard Book Number (ISBN)">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Book Price</label>
            <input type="number" class="form-control" id="" name="price" placeholder="Input price without Rp, Ex: 10000, 480000, ...">
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</body>
</html>
