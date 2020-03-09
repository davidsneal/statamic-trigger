<?php

namespace Silentz\Anvil\Http\Controllers\Actions;

use Silentz\Anvil\Http\Controllers\BaseController;

class DeploymentLogController extends BaseController
{
    public function __invoke()
    {
        $log = $this->forge->siteDeploymentLog(config('anvil.forge.server'), config('anvil.forge.site'));

        return view('anvil::cp.deployment-log', ['log'=>$log]);
    }
}
