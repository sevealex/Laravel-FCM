<?php

namespace Prgayman\Fcm\Support\Request;

abstract class BaseRequest
{

  /**
   * Firebase Request Server Config
   * @var collect
   */
  protected $config;


  public function __construct($config = [])
  {
    $this->loadServerConfig($config);
  }

  /**
   * load server config from config/fcm.php and set to $this->config
   * @return void
   */
  private function loadServerConfig($config)
  {
    $this->config = array_merge(app('config')->get("fcm"), $config);
  }

  /**
   * Build Request header 
   * 
   * @return array
   */
  protected function buildRequestHeader()
  {
    return [
      "Authorization" => "key=" . $this->config["server_key"],
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
