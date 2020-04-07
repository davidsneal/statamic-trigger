<?php

namespace Davidsneal\Trigger\Http\Controllers;

class SiteController extends BaseController
{
    public function __invoke()
    {
        return view('trigger::cp.trigger');
    }
}
