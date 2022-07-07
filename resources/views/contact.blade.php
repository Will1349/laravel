@extends('layout')

@section('title', 'Contact')

@section('content')
<h1>Contact</h1>
<form method="POST" action=" {{  route('message.store')}}">
    @csrf

    <input name=" name" placeholder="Input your name" value="{{ old('name') }}"><br />
    {!! $errors->first('name', '<small>:message</small><br>') !!}

    <input type=" email" name="email" placeholder="Input your email address" value="{{ old('email') }}"><br />
    {!! $errors->first('email', '<small>:message</small><br>') !!}

    <input name="subject" placeholder="Input your subject" value="{{ old('subject') }}"><br />
    {!! $errors->first('subject', '<small>:message</small><br>') !!}

    <textarea name="content" placeholder="Input your message">{{ old('content') }}</textarea><br />
    {!! $errors->first('content', '<small>:message</small><br>') !!}
    <button>@lang('Send') </button>
</form>
@endsection
