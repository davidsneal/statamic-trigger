<?php

namespace Silentz\Anvil\Http\Controllers;

class SiteController extends BaseController
{
    public function __invoke()
    {
        return view('anvil::cp.site', ['site'=> $this->site]);
    }
}
