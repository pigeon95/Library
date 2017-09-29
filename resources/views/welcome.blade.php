@extends('layout')
@section('content')

<h1>Biblioteka</h1> 
<table class="table">
    <tr>
        <th>ID</th>
        <th>Tytuł</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>

        @if(strlen($book->title)>10) <td>{{ substr($book->title, 0, 10).'...'}}</td>
        @else <td>{{ $book->title }}</td>
        @endif
        
        <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['destroy', $book->id]]) !!}
                <a class="btn btn-info" href="{{ route('edit', $book->id) }}">Edytuj</a>
                {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>

<a href ="{{ route('create')}}" class='btn btn btn-success'>Dodaj nową książkę</a>
@endsection