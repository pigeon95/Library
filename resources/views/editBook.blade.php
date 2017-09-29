@extends('layout')
@section('content')


<h1>Edytuj</h1>
<table class="table">
{!! Form::model($book, ['route' => ['update', $book->id], 'method' => 'PUT']) !!}

<tr>
    <td>Zmień tytuł:</td>
</tr>

<tr>
    <td>{!!Form::text('title', $book->title)!!}</td>
</tr>

<tr>
    <td>
        <a class="btn btn-warning" href="{{ route('index') }}">Powrót</a>
        {!! Form::submit('Zapisz', ['class' => 'btn btn-success'])!!}
    </td>
</tr>
    
{!! Form::close() !!}
</table>


@endsection