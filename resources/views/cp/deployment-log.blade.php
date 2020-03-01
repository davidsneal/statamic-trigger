@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <div class="text-grey-80">
        <h2><a href="{{ route('statamic.cp.anvil.sites', ['server'=>$server]) }}">Sites</a> &Lt; Log</h2>

        <div class="p-2 mt-3 text-sm bg-white rounded ">
            {!! nl2br($log) !!}
        </div>
    </div
@endsection