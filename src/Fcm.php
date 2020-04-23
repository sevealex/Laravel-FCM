<?php

namespace Prgayman\Fcm;

use Exception;
use Prgayman\Fcm\Support\Payload\Data\Data;
use Prgayman\Fcm\Support\Payload\Notification\Notification;
use Prgayman\Fcm\Support\Payload\Options\Options;
use Prgayman\Fcm\Support\Sender\FcmSender;

/**
 * TODO
 *  - Add Response History notifications
 *  - Add  History notifications
 */
class Fcm extends FcmSender
{

  public function sendNotification($to, Notification $notification, Options $options = null)
  {
    if (!$notification instanceof Notification) {
      throw new Exception('notification must be instance of [Prgayman\Fcm\Support\Payload\Notification\Notification]');
    }

    if ($options && !$options instanceof Options) {
      throw new Exception('options must be instance of [Prgayman\Fcm\Support\Payload\Options\Options]');
    }
    return $this->send($to, $options, $notification, null);
  }

  public function sendNotificationWithData($to, Notification $notification, Data $data, Options $options = null)
  {
    if (!$notification instanceof Notification) {
      throw new Exception('notification must be instance of [Prgayman\Fcm\Support\Payload\Notification\Notification]');
    }

    if (!$data instanceof Data) {
      throw new Exception('Data must be instance of [Prgayman\Fcm\Support\Payload\Data\Data]');
    }

    if ($options && !$options instanceof Options) {
      throw new Exception('options must be instance of [Prgayman\Fcm\Support\Payload\Options\Options]');
    }

    return $this->send($to, $options, $notification, $data);
  }

  public function sendhData($to,  Data $data, Options $options = null)
  {
    if (!$data instanceof Data) {
      throw new Exception('Data must be instance of [Prgayman\Fcm\Support\Payload\Data\Data]');
    }

    if ($options && !$options instanceof Options) {
      throw new Exception('options must be instance of [Prgayman\Fcm\Support\Payload\Options\Options]');
    }

    return $this->send($to, $options, null, $data);
  }
}
