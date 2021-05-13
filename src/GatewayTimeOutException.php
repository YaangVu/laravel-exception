<?php

namespace YaangVu\Exceptions;


use Exception;
use Illuminate\Http\Response;

class GatewayTimeOutException extends BaseException
{
    public function __construct(string|array $message, Exception $e = null)
    {
        parent::__construct($message, $e, Response::HTTP_GATEWAY_TIMEOUT);
    }
}
