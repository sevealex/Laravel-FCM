<?php

namespace Prgayman\Fcm\Support\Sender;

use Exception;

use Prgayman\Fcm\Support\Payload\Data\Data;
use Prgayman\Fcm\Support\Payload\Notification\Notification;
use Prgayman\Fcm\Support\Payload\Options\Options;
use Prgayman\Fcm\Support\Request\Request;
use Prgayman\Fcm\Support\Response\DownstreamResponse;

class FcmSender extends HttpSender
{

  const MAX_TOKEN_PER_REQUEST = 1000;

  /**
   * Request Constrauct 
   * 
   * @param string|null $to
   * @param Prgayman\Fcm\Support\Payload\Options\Options $options
   * @param Prgayman\Fcm\Support\Payload\Notification\Notification $notification
   * @param Prgayman\Fcm\Support\Payload\Data\Data $data
   */
  protected function send(
    $to,
    Options $options = null,
    Notification $notification = null,
    Data $data = null,
    $config = []
  ) {

    $response = null;
    if (is_array($to)) {
      foreach ($this->partialTokens($to) as $tokens) {
        $responsePartial = new DownstreamResponse($this->httpRequest(new Request($tokens, $options, $notification, $data, $config)), $tokens);
        if (!$response) {
          $response = $responsePartial;
        } else {
          $response->merge($responsePartial);
        }
      }
    } else {
      $response = new DownstreamResponse($this->httpRequest(new Request($to, $options, $notification, $data, $config)), $to);
    }
    return $response;
  }

  /**
   * Array Chunk Tokens
   * @param array $tokens
   * @return array
   */
  protected function partialTokens($tokens)
  {
    return array_chunk($tokens, self::MAX_TOKEN_PER_REQUEST, false);
  }
}
