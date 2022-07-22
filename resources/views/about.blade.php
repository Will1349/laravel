@extends('layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4 w-100 h-100" src="/img/about-us.svg" alt="Quien soy">
        </div>

        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary text-md-center">Quién soy</h1>
            <hr>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae rerum
                ad,
                sint ea tempore facere minus animi ullam tempora illo distinctio, adipisci harum placeat debitis a,
                qui
                est voluptatum dolore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum illum
                corporis neque doloremque necessitatibus est, accusamus asperiores natus blanditiis molestiae non
                explicabo iste sit. Laudantium nulla fugit molestias accusamus?</p>
            <hr>
            <a class="btn btn-lg w-100 btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <hr>
            <a class="btn btn-lg w-100 btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>


    </div>
</div>
@endsection
