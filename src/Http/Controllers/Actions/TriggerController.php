<?php

namespace Davidsneal\Trigger\Http\Controllers\Actions;

use Davidsneal\Trigger\Http\Controllers\BaseController;
use Zttp\Zttp;

class TriggerController extends BaseController
{
    public function __invoke()
    {
        $response = Zttp::post(env('BUILD_HOOK_URL'));

        abort_unless($response->isOk(), 'Trigger request failed');

        return response()->json();
    }
}
