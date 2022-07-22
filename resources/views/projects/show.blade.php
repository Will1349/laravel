@extends('layout')

@section('title','Portafolio | ' . $project->title)

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-sm-10 col-lg-8 mx-auto ">



            @if ($project->image)
            <img class="card-img-top" style="height: 300px; object-fit:cover" src="/storage/{{ $project->image }}"
                alt="{{ $project->title }}">
            @endif


            <div class="bg-white p-3 shadow rounded ">


                <!--Mostrar tíitulo, categoría y fecha de creación en la vista show del proyecto-->
                <div class="d-flex justify-content-between align-items-center">

                    <!-- Título-->
                    <h1 class="shadow text-primary">{{ $project->title }}</h1>


                    @if ($project->category_id)
                    <!-- Categoría-->
                    <a href="{{ route('categories.show', $project->category) }}"
                        class="badge badge-primary text-bg-primary">
                        {{ $project->category->name }}
                    </a>
                    @endif



                    <!-- Fecha-->
                    <a class="text-black-50 ">
                        {{ $project->created_at->format('d/m/Y') }}
                    </a>

                </div>
                <hr>

                <!--Descripción del proyecto-->
                <p class="text-secondary">
                    {{ $project->description }}
                </p>
                <hr>

                <!-- Botones de acción vista show-->
                <div class="d-flex justify-content-between align-items-center">

                    <!-- Botón regresar-->
                    <a class="btn btn-lg w-40 btn-outline-primary" href="{{ route('projects.index') }}">
                        Regresar
                    </a>


                    @auth
                    <div class="btn-group btn-group-lg">
                        <!-- Botón editat-->
                        <a class="btn btn-primary" href="{{ route('projects.edit', $project)}}">Editar
                        </a>

                        <!--Botón-->
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
                            Eliminar
                        </a>
                    </div>

                    <form id="delete-project" class="d-none" method="POST"
                        action="{{ route('projects.destroy', $project) }}">

                        @csrf @method('DELETE')

                    </form>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>

@endsection
