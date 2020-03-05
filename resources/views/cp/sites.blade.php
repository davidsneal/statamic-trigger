@extends('statamic::layout')

@section('title', 'Forge')

@section('content')
    <h2 class="mb-2 text-grey-80">Sites</h2>
    <table class="text-sm text-center bg-white rounded table-fixed">
        <thead>
            <tr>
                <th scope="col" class="py-2">Server</th>
                <th scope="col" class="py-2">Site</th>
                <th scope="col" class="py-2">Forge</th>
                <th scope="col" class="py-2">Deployment Log</th>
                <th scope="col" class="py-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($servers as $server)
            @foreach ($server['sites'] as $site)
            <tr class="items-center mt-1">
                <td class="w-1/5">
                    <a href="http://{{ $site->name }}" target="_blank" class="hover:text-blue">{{ $server['name'] }}</a>
                </td>
                <td class="w-1/5">
                    <a href="http://{{ $site->name }}" target="_blank" class="hover:text-blue">{{ $site->name }}</a>
                </td>
                <td class="w-1/5">
                    <a href="https://forge.laravel.com/servers/{{ $site->serverId }}/sites/{{ $site->id }}" class="hover:text-blue">Visit</a>
                </td>
                <td class="w-1/5">
                    <a href="{{ route('statamic.cp.anvil.site.deployment-log',['server'=>$site->serverId, 'site_id'=>$site->id]) }}" class="hover:text-blue">View</a>
                </td>
                <td class="w-1/5">
                    <form
                        action="{{ route('statamic.cp.anvil.site.deploy', ['server'=>$site->serverId, 'site_id'=>$site->id]) }}"
                        method="POST"
                    >
                        @csrf
                        <button class="px-1 text-white bg-blue-500 rounded-lg py-sm" type="submit">Deploy</button>
                    </form>
                </td>
            </div>
            </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
@endsection