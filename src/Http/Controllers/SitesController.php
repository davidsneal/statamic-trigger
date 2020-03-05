<?php

namespace Silentz\Anvil\Http\Controllers;

class SitesController extends BaseController
{
    public function __invoke()
    {
        $servers = collect($this->forge->servers())->map(function ($server) {
            return [
                'name'=>$server->name,
                'sites'=> $this->forge->sites($server->id),
            ];
        });

        return view('anvil::cp.sites', ['servers'=> $servers]);
    }
}
