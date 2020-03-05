@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <h2 class="mb-2 text-grey-80">Sites</h2>
    <div class="flex flex-col p-2 text-sm bg-white rounded ">
        @foreach ($servers as $server)
            @foreach ($server['sites'] as $site)
            <div class="flex items-center mt-1">
                <div class="w-1/5">
                    <a href="http://{{ $site->name }}" target="_blank" class="hover:text-blue">{{ $server['name'] }}</a>
                </div>
                <div class="w-1/5">
                    <a href="http://{{ $site->name }}" target="_blank" class="hover:text-blue">{{ $site->name }}</a>
                </div>
                <div class="w-1/5">
                    <a href="https://forge.laravel.com/servers/{{ $site->serverId }}/sites/{{ $site->id }}" class="hover:text-blue">Visit in Forge</a>
                </div>
                <div class="w-1/5">
                    <a href="{{ route('statamic.cp.anvil.site.deployment-log',['server'=>$site->serverId, 'site_id'=>$site->id]) }}" class="hover:text-blue">View Deployment Log</a>
                </div>
                <form class="w-1/4"
                    action="{{ route('statamic.cp.anvil.site.deploy', ['server'=>$site->serverId, 'site_id'=>$site->id]) }}"
                    method="POST"
                >
                    @csrf
                    <button class="px-1 text-white bg-blue-500 rounded-lg py-sm" type="submit">Deploy Site</button>
                </form>
            </div class>
            @endforeach
        @endforeach
    </div>
@endsection