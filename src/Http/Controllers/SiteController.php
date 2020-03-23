<?php

namespace Edalzell\Anvil\Http\Controllers;

class SiteController extends BaseController
{
    public function __invoke()
    {
        $log = $this->forge->siteDeploymentLog(config('anvil.forge.server'), config('anvil.forge.site'));

        $date = strtok($log, PHP_EOL);

        return view('anvil::cp.site', [
            'site'=> $this->site,
            'deployment' => [
                'log' => $log,
                'date' => $date,
            ],
        ]);
    }
}
