<?php

namespace YaangVu\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class ForbiddenException extends BaseException
{
    public function __construct(string|array $message, Exception $e)
    {
        parent::__construct($message, $e, Response::HTTP_FORBIDDEN);
    }
}
