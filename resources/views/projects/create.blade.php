@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Crear nuevo proyecto</h1>
<form method="POST" action="{{  route('projects.store')}}">
    @csrf
    <label>
        Titulo del proyecto <br>
        <input type="text" name="title">
    </label>
    <br>
    <label>
        URL del proyecto <br>
        <input type="text" name="url">
    </label>
    <br>
    <label>
        Descripción del proyecto <br>
        <textarea name="description"></textarea>
    </label>
    <br>
    <button>Guardar</button>
</form>

@endsection
