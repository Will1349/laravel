@extends('layout')

@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>

<ul>
    @forelse($projects as $project)
    <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }} </a></li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    {{ $projects->links() }}
</ul>

@endsection
