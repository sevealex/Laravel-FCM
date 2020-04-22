<?php

namespace Prgayman\Fcm\Support\Request;

abstract class BaseRequest
{
  /**
   * @var \GuzzleHttp\ClientInterface
   */
  protected $client;

  /**
   * Firebase Request Server Config
   * @var collect
   */
  protected $config;


  public function __construct()
  {
    $this->loadServerConfig();
  }

  /**
   * load server config from config/fcm.php and set to $this->config
   * @return void
   */
  private function loadServerConfig()
  {
    $config = collect(config("fcm"));
    $this->config = $config->only(["server_key", "base_url"]);
  }

  /**
   * Build Request header 
   * 
   * @return array
   */
  protected function buildRequestHeader()
  {
    return [
      "Authorization" => "key=" . $this->config->server_key,
      'Content-Type' => 'application/json',
    ];
  }

  /**
   * Build the body of the request.
   *
   * @return mixed
   */
  abstract protected function buildBody();

  /**
   * Return the request in array form.
   *
   * @return array
   */
  public function build()
  {
    return [
      'headers' => $this->buildRequestHeader(),
      'json' => $this->buildBody(),
    ];
  }
}
