@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <h2 class="mb-2 text-grey-80">Sites</h2>
    <div class="flex flex-col p-2 text-sm bg-white rounded ">
        @foreach ($sites as $site)
            <div class="flex items-center mt-1">
                <div class="w-1/5">
                    <a href="" class="hover:text-blue">{{ $site->name }}</a>
                </div>
                <div class="w-1/5">
                    <a href="{{ route('statamic.cp.anvil.site.deployment-log',['server'=>$site->serverId, 'site_id'=>$site->id]) }}" class="hover:text-blue">View Deployment Log</a>
                </div>
                <form class="w-1/5"
                    action="{{ route('statamic.cp.anvil.site.deploy', ['server'=>$site->serverId, 'site_id'=>$site->id]) }}"
                    method="POST"
                >
                    @csrf
                    <button class="bg-blue-400 rounded-lg text-grey-10 p-sm" type="submit">Deploy Site</button>
                </form>
            </div class>
        @endforeach
    </div>
@endsection