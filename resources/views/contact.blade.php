@extends('layout')

@section('title', 'Contact')

@section('content')
<h1>Contact</h1>
<form method="POST" action=" {{  route('contact')}}">
    @csrf
    <input name=" name" placeholder="Input your name" value="Neo""><br />
    <input type=" email" name="email" placeholder="Input your email address" value="neo@icloud.com"><br />
    <input name="subject" placeholder="Input your subject" value="Asunto de prueba"><br />
    <textarea name="content" placeholder="Input your message">Mensaje de prueba</textarea><br />
    <button>Send </button>
</form>
@endsection
