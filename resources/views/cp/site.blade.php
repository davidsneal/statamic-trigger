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
            <div class="flex items-center justify-between">
                <div class="pr-4">
                    <h2 class="font-bold">Deploy Site</h2>
                    <p class="my-1 text-sm text-grey">Deploy your site</p>
                </div>
                <form action="{{ cp_route('anvil.site.deploy') }}" method="POST">
                    @csrf
                    <button class="btn">Deploy</button>
                </form>
            </div>
            <div class="flex text-sm text-grey">
                <div class="badge-pill-sm">
                    <span class="font-medium text-grey-80">Last Deployment:</span> HOW DO I GET THIS?
                </div>
            </div>
        </div>

        <div class="p-2 border-t bg-grey-20">
            <div class="flex items-center justify-between">
                <div class="pr-4">
                    <h2 class="font-bold">Deployment Log</h2>
                    <p class="my-1 text-sm text-grey">See your latest deployment log</p>
                </div>
                <a href="{{ cp_route('anvil.site.deployment-log') }}" class="btn">View</a>
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