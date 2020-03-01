<?php

namespace Silentz\Anvil\Http\Controllers;

class ServerController extends BaseController
{
    public function index()
    {
        return view('anvil::cp.servers', ['servers'=> $this->forge->servers()]);
    }
}
