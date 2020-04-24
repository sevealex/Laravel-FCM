<?php

namespace Prgayman\Fcm;

use Prgayman\Fcm\Support\Payload\Data\Data;
use Prgayman\Fcm\Support\Payload\Notification\Notification;
use Prgayman\Fcm\Support\Payload\Options\Options;
use Prgayman\Fcm\Support\Sender\FcmSender;

class Fcm extends FcmSender
{

  /**
   * Send notification 
   * 
   * @param array|string $to
   * @param Prgayman\Fcm\Support\Payload\Notification\Notification $notification
   * @param Prgayman\Fcm\Support\Payload\Options\Options $options
   * 
   * @return Prgayman\Fcm\Support\Response\DownstreamResponse
   */
  public function sendNotification($to, Notification $notification, Options $options = null)
  {
    return $this->send($to, $options, $notification, null);
  }

  /**
   * Send notification with data
   * 
   * @param array|string $to
   * @param Prgayman\Fcm\Support\Payload\Notification\Notification $notification
   * @param Prgayman\Fcm\Support\Payload\Data\Data $data
   * @param Prgayman\Fcm\Support\Payload\Options\Options $options
   * 
   * @return Prgayman\Fcm\Support\Response\DownstreamResponse
   */
  public function sendNotificationWithData($to, Notification $notification, Data $data, Options $options = null)
  {
    return $this->send($to, $options, $notification, $data);
  }


  /**
   * Send  data 
   * 
   * @param array|string $to
   * @param Prgayman\Fcm\Support\Payload\Data\Data $data
   * @param Prgayman\Fcm\Support\Payload\Options\Options $options
   * 
   * @return Prgayman\Fcm\Support\Response\DownstreamResponse
   */
  public function sendhData($to,  Data $data, Options $options = null)
  {
    return $this->send($to, $options, null, $data);
  }
}
