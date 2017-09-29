@extends('layout')
@section('content')


<h1>Dodaj książkę</h1>
<table class="table">
{!! Form::open(['route' => 'store']) !!}

<tr>
    <td>Wpisz tytuł:</td>
</tr>

<tr>
    <td>{!!Form::text('title', null)!!}</td>
</tr>

<tr>
    <td>
        <a class="btn btn-warning" href="{{ route('index') }}">Powrót</a>
        {!! Form::submit('Dodaj', ['class' => 'btn btn-success'])!!}
    </td>
</tr>
    
{!! Form::close() !!}
</table>




@endsection