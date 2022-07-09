<?php

namespace YaangVu\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class BadRequestException extends BaseException
{
    public function __construct(array|string $message, Exception $e = null)
    {
        parent::__construct($message, $e, Response::HTTP_BAD_REQUEST);
    }
}
