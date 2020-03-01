@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <h2 class="mb-2 text-grey-80">Servers</h2>

    <div class="p-2 text-sm bg-white rounded">
        <ul class="text-sm list-disc text-grey-80">
            @foreach ($servers as $server)
                <li>
                    <a href="{{ route('statamic.cp.anvil.sites', ['server'=>$server->id]) }}">{{ $server->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection