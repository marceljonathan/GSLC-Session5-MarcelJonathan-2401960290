@extends('template')

@section('title', 'Home')

@include('header')

@section('content')
    <h1 style="justify-content: center">Welcome to BookPal System Administrations</h1>

    @if(count($books) < 1)
        <h2>Ooopsss!!! There's nothing to view</h2>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection

