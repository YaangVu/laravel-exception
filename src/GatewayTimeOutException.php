<?php

namespace YaangVu\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 * @package YaangVu\Exceptions
 * @OA\Schema(
 *     schema="GatewayTimeOutException"
 * )
 */
class GatewayTimeOutException extends BaseException
{
    /**
     *
     * @OA\Property(
     *   property="message",
     *   oneOf={
     *     @OA\Schema(type="string"),
     *     @OA\Schema(
     *          type="array",
     *          @OA\Items({})
     *     ),
     *   }
     * ),
     * @OA\Property(
     *     property="code",
     *     type="integer",
     *     format="int64",
     *     default="504"
     * ),
     *
     */
    public function __construct(string|array $message, ?Exception $e = null)
    {
        parent::__construct($message, $e, Response::HTTP_GATEWAY_TIMEOUT);
    }
}
