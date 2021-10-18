
@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Surname </th>
        <th> Total books </th>
        <th> Actions </th>
    </tr>

{{-- patikrinam ar egzistuoja error zinute --}}
    @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get("error_message")}}
        </div>
    @endif

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get("success_message")}}
        </div>
    @endif


    @foreach ($authors as $author)
    <tr>
        <td>{{$author->id}} </td>
        <td>{{$author->name}} </td>
        <td>{{$author->surname}} </td>
        <td>{{$author->authorBooks->count()}}</td>
        <td>
            <a href="{{route('author.show', [$author])}}" class="btn btn-secondary">Show</a>
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
