<?php

namespace Edalzell\Anvil\Http\Controllers\Actions;

use Edalzell\Anvil\Http\Controllers\BaseController;

class DeploySiteController extends BaseController
{
    public function __invoke()
    {
        $this->site->deploySite();

        return response('Success');
    }
}
