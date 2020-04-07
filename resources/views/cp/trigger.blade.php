@extends('statamic::layout')

@section('title', 'Trigger')

@section('content')
    <header class="mb-3">
        <div class="flex items-center justify-between">
            <h1>{{ __('trigger::lang.name') }}</h1>
        </div>
    </header>
    <div class="p-0 card">
        <div class="p-2">
            <trigger-addon
                :lang='@json(__('trigger::lang.component'))'
                route="{{ route('statamic.cp.'.config('trigger.path').'.fire') }}"
            />
        </div>
    </div>
@endsection
