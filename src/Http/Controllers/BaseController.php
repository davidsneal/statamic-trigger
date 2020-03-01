<?php

namespace Silentz\Anvil\Http\Controllers;

use Themsaid\Forge\Forge;
use Statamic\Http\Controllers\Controller;

abstract class BaseController extends Controller
{
    protected Forge $forge;

    public function __construct()
    {
        $this->forge = new Forge(env('FORGE_TOKEN'));
    }
}
