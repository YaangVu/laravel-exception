<?php

namespace YaangVu\Exceptions;

use Exception;
use Illuminate\Http\Response;

class TooManyRequestException extends BaseException
{
    public function __construct(string|array $message, Exception $e)
    {
        parent::__construct($message, $e, Response::HTTP_TOO_MANY_REQUESTS);
    }
}
