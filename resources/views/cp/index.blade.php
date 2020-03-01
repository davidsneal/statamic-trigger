@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    @foreach ($servers as $server)
        <p>Name: <a href="{{ route('statamic.cp.anvil.sites', ['server'=>$server->id]) }}">{{ $server->name }}</a></p>
    @endforeach
@endsection