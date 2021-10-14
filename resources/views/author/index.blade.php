
@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Surname </th>
        <th> Actions </th>
    </tr>

    @foreach ($authors as $author)
    <tr>
        <td>{{$author->id}} </td>
        <td>{{$author->name}} </td>
        <td>{{$author->surname}} </td>
        <td>
            <form method="post" action={{route('author.destroy',[$author])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
