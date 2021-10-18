@extends('layouts.app')


@section('content')

<h2>Name: {{$author->name}}</h2>
<h2>Surname: {{$author->surname}}</h2>

{{-- Noriu atvaizduoti knyga/knygas kurios priklauso sitam autoriui --}}
{{-- var_dump --}}
{{-- Dabar galim atvaizduoti autoriaus knygas --}}
{{-- Autorius turi dvi knygas/ autorius gali tureti n-knygu --}}


{{-- Kaip suskaiciuot kiek autorius turi knygu? --}}
{{-- tikrinti kiek irasu priklauso autoriui --}}

{{-- 2 irasu --}}
<h2>Total books: {{$books_count}}</h2>

@foreach ($books as $book)
    <p>Book name: {{$book->name}}</p>
    <p>Book description: {{$book->description}}</p>
@endforeach

{{-- {{ dd($author->authorBooks) }} --}}

@endsection
