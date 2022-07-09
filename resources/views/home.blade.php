@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae rerum
                ad,
                sint ea tempore facere minus animi ullam tempora illo distinctio, adipisci harum placeat debitis a,
                qui
                est voluptatum dolore!</p>

            <a class="btn btn-lg w-100 btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <hr>
            <a class="btn btn-lg w-100 btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
</div>

@endsection
