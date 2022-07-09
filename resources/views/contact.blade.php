@extends('layout')

@section('title', 'Contact')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action=" {{  route('message.store')}}">


                @csrf
                <h1 class="display-4">@lang('Contact')</h1>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                        id="name" name="name" placeholder="Escribe tu nombre aquí" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                        id="email" name="email" placeholder="Escribe tu correo aquí" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                        id="subject" name="subject" placeholder="Escribe aqui el asunto de tu mensaje"
                        value="{{ old('subject') }}">
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea
                        class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                        id="content" name="content" placeholder="Escribe el contenido de tu mensaje aquí">{{ old('content') }}
                </textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button class="btn btn-primary btn-lg w-100">@lang('Send') </button>

            </form>
        </div>
    </div>
</div>

@endsection