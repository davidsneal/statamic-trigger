@extends('statamic::layout')

@section('title', 'Trigger')

@section('content')
    <header class="mb-3">

        @include('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ])
        <div class="flex items-center justify-between">
            <h1>Trigger</h1>
        </div>
    </header>
    <div class="p-0 card">
        <div class="p-2">
            <deploy-site route="{{ $route }}"></deploy-site>
        </div>
    </div>
@endsection
