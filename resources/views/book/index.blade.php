
@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Description </th>
        <th> Author </th>
        <th> Actions </th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{$book->id}} </td>
        <td>{{$book->name}} </td>
        <td>{!! $book->description !!} </td>
        <td> {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}} </td>
        <td>
            <a href="{{route('book.edit',[$book])}}" class="btn btn-primary">Edit </a>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
