<?php

namespace Silentz\Anvil\Http\Controllers;

class ServerController extends BaseController
{
    public function index()
    {
        $servers = $this->forge->servers();

        return view('anvil::cp.index', ['servers'=> $servers]);
    }
}
