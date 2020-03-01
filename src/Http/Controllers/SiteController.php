<?php

namespace Silentz\Anvil\Http\Controllers;

class SiteController extends BaseController
{
    public function index(string $server)
    {
        $sites = $this->forge->sites($server);

        return view('anvil::cp.sites', ['sites'=> $sites]);
    }
}
