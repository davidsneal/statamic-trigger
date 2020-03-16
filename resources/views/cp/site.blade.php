@extends('statamic::layout')

@section('title', 'Anvil')

@section('content')
    <header class="mb-3">

        @include('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ])
        <div class="flex items-center justify-between">
            <h1>Anvil</h1>
        </div>
    </header>
    <div class="p-0 card">
        <div class="p-2">
            <deploy-site route="{{ cp_route('utilities.anvil.deploy') }}"></deploy-site>
        </div>

        <div class="p-2 border-t bg-grey-20">
            <div class="flex items-center justify-between">
                <div class="pr-4">
                    <h2 class="font-bold">Deployment Log</h2>
                    <p class="my-1 text-sm text-grey">See your latest deployment log</p>
                </div>
                <a href="{{ cp_route('utilities.anvil.deployment-log') }}" class="btn">View</a>
            </div>
        </div>

        <div class="p-2 border-t">
            <div class="flex items-center justify-between">
                <div class="pr-4">
                    <h2 class="font-bold">Forge Site</h2>
                    <p class="my-1 text-sm text-grey">Visit your Forge site</p>
                </div>
                <a href="https://forge.laravel.com/servers/{{ $site->serverId }}/sites/{{ $site->id }}" target="_blank" class="btn">Visit</a>
            </div>
        </div>
    </div>
@endsection