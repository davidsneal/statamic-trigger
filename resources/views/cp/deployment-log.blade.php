@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <header class="mb-3">

        @include('statamic::partials.breadcrumb', [
            'url' => cp_route('anvil.site'),
            'title' => 'Anvil'
        ])
        <div class="flex items-center justify-between">
            <h1>Deployment Log</h1>
        </div>
    </header>
    <div class="p-0 card">
        <div class="p-2 mt-3 text-sm bg-white rounded text-grey-80">
            {!! nl2br($log) !!}
        </div>
    </div>
@endsection