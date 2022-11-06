<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Update or Delete Book</h1>

    @if(count($books) < 1)
        <h2>Ooopsss!!! There's no books to update or delete</h2>
    @else
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td scope="row">{{$book->id}}</td>
                            <td>
                                @if ($book->content_type == "image")
                                    <img width="200px" height="300px" src={{$book->content_url}} alt="">
                                @else
                                    <video src={{$book->content_url}} controls></video>
                                @endif
                            </td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->ISBN}}</td>
                            <td>{{$book->price}}</td>
                            <td><form action="{{route('update_books_view', ['id' => $book->id])}}">
                                <button type="submit" class="btn btn-warning">UPDATE</button>
                            </form></td>
                            <td><form action="{{route('delete_books_logic', ['id' => $book->id])}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</body>
</html>

