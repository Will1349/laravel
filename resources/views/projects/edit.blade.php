@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Editar proyecto</h1>

@if($errors->any())
<ul>
    @foreach ( $errors->all() as $error )
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<form method="POST" action="{{  route('projects.update', $project)}}">
    @csrf @method('PATCH')
    <label>
        Titulo del proyecto <br>
        <input type="text" name="title" value="{{old( 'title',$project->title) }}">
    </label>
    <br>
    <label>
        URL del proyecto <br>
        <input type="text" name="url" value="{{old( 'url',$project->url) }}">
    </label>
    <br>
    <label>
        Descripción del proyecto <br>
        <textarea name="description">{{old('description',$project->description)}}</textarea>
    </label>
    <br>
    <button>Actualizar</button>
</form>

@endsection
