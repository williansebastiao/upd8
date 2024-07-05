<?php

namespace App\Constants;

use Symfony\Component\HttpFoundation\Response;

class StatusCode
{
    const SUCCESS = Response::HTTP_OK;
    const INTERNAL_SERVER_ERROR = Response::HTTP_INTERNAL_SERVER_ERROR;
}
