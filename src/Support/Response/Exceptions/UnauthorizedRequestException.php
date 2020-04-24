<?php

namespace Prgayman\Fcm\Support\Response\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UnauthorizedRequestException.
 */
class UnauthorizedRequestException extends Exception
{
  /**
   * UnauthorizedRequestException constructor.
   *
   * @param \Psr\Http\Message\ResponseInterface $response
   */
  public function __construct(ResponseInterface $response)
  {
    $code = $response->getStatusCode();

    parent::__construct('Server Key are invalid or is not set key FIREBASE_SERVER_KEY in env file', $code);
  }
}
