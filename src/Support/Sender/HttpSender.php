<?php

namespace Prgayman\Fcm\Support\Sender;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;


abstract class HttpSender
{
  /**
   * The client used to send messages.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $client;

  /**
   * The URL entry point.
   *
   * @var string
   */
  protected $url;

  /**
   * Initializes a new sender object.
   *
   * @param \GuzzleHttp\ClientInterface $client
   */
  public function __construct()
  {
    $this->client = new Client();
    $this->url = config('fcm.base_url');
  }

  /**
   * @param Prgayman\Fcm\Support\Request\Request $request
   * @return null|\Psr\Http\Message\ResponseInterface
   */
  protected function httpRequest($request)
  {
    try {
      $responseGuzzle = $this->client->request('post', $this->url, $request->build());
    } catch (ClientException $e) {
      $responseGuzzle = $e->getResponse();
    }
    return $responseGuzzle;
  }
}
