<?php

namespace YaangVu\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class SystemException extends BaseException
{
    protected bool $shouldCapture = true;

    public function __construct(string|array $message, Exception $e = null)
    {
        parent::__construct($message, $e, Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
