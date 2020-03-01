<?php

namespace Silentz\Anvil\Http\Controllers\Actions;

use Silentz\Anvil\Http\Controllers\BaseController;

class DeploymentLogController extends BaseController
{
    public function __invoke(string $server, string $site)
    {
        $log = $this->forge->siteDeploymentLog($server, $site);

        return view('anvil::cp.deployment-log', ['log'=>$log, 'server'=>$server]);
    }
}
