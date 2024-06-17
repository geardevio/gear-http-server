<?php

namespace GearDev\HttpServer\ServerProcess;

use GearDev\Processes\ProcessesManagement\AbstractProcess;
use Illuminate\Http\Request;

abstract class AbstractHttpProcess extends AbstractProcess
{
    abstract protected function dispatchRequestHandledEvent(Request $laravelRequest, $response);

    abstract protected function dispatchRequestReceivedEvent(Request $laravelRequest);

    abstract protected function dispatchRequestTerminatedEvent(Request $laravelRequest, $response);

}