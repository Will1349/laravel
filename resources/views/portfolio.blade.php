@extends('layout')

@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>

<ul>
    @forelse($projects as $project)
    <li>{{ $project->title }} </li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    {{ $projects->links() }}
</ul>

@endsection
