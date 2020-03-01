<?php

namespace Silentz\Anvil\Http\Controllers\Actions;

use Silentz\Anvil\Http\Controllers\BaseController;

class DeploySiteController extends BaseController
{
    public function __invoke(string $server, string $site)
    {
        $site = $this->forge->site($server, $site);

        $site->deploySite();

        return redirect(route('statamic.cp.anvil.sites', ['server'=> $server]))->with(['status'=>'Success']);
    }
}
