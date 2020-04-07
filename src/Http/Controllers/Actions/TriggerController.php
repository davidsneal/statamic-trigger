<?php

namespace Davidsneal\Trigger\Http\Controllers\Actions;

use Davidsneal\Trigger\Http\Controllers\BaseController;
use Zttp\Zttp;

class TriggerController extends BaseController
{
    public function __invoke()
    {
        $response = Zttp::post(config('trigger.url'));

        abort_unless($response->isOk(), __('trigger::lang.failed'));

        return response()->json();
    }
}
