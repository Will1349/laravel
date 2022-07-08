@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Editar proyecto</h1>


<form method="POST" action="{{  route('projects.update', $project)}}">
    @method('PATCH')

    @include('projects/_form',['btnText'=>'Actualizar'])
</form>

@endsection
