<?php

namespace Prgayman\Fcm\Support\Request;

use Prgayman\Fcm\Support\Payload\Data\Data;
use Prgayman\Fcm\Support\Payload\Notification\Notification;
use Prgayman\Fcm\Support\Payload\Options\Options;

class Request extends BaseRequest
{
  /**
   * Registration tokens
   * @var array|string
   */
  protected $to;

  /**
   * Payload Notification
   * @var Prgayman\Fcm\Support\Payload\Notification\Notification
   */
  protected $notification;

  /**
   * Payload Options
   * @var Prgayman\Fcm\Support\Payload\Options\Options
   */
  protected $options;

  /**
   * Payload Data
   * @var Prgayman\Fcm\Support\Payload\Data\Data
   */
  protected $data;


  /**
   * Request Constrauct 
   * 
   * @param string|null $to
   * @param Prgayman\Fcm\Support\Payload\Options\Options $options
   * @param Prgayman\Fcm\Support\Payload\Notification\Notification $notification
   * @param Prgayman\Fcm\Support\Payload\Data\Data $data
   */
  public function __construct(
    $to,
    Options $options = null,
    Notification $notification = null,
    Data $data = null
  ) {
    parent::__construct();
    $this->to = $to;
    $this->notification = $notification;
    $this->options = $options;
    $this->data = $data;
  }

  /**
   * Build the body for the request.
   * 
   * @return array
   */
  protected function buildBody()
  {
    return array_filter(
      array_merge(
        [
          'to' => $this->getTo(),
          'registration_ids' => $this->getRegistrationIds(),
          'notification' => $this->getNotification(),
          'data' => $this->getData(),
        ],
        $this->getOptions()
      )
    );
  }

  /**
   * get to tokens.
   *
   * @return null|string
   */
  protected function getTo()
  {
    return  is_array($this->to) ? null : $this->to;
  }

  /**
   * get Registration Ids.
   *
   * @return array|null
   */
  protected function getRegistrationIds()
  {
    return is_array($this->to) ? $this->to : null;
  }

  /**
   * get Options .
   *
   * @return array
   */
  protected function getOptions()
  {
    return  $this->options ? $this->options->toArray() : [];
  }

  /**
   * get notification.
   *
   * @return array|null
   */
  protected function getNotification()
  {
    return $this->notification ? $this->notification->toArray() : null;
  }

  /**
   * get data.
   *
   * @return array|null
   */
  protected function getData()
  {
    return $this->data ? $this->data->toArray() : null;
  }
}
