<?php

namespace Prgayman\Fcm\Support\Payload\Notification;

use Illuminate\Contracts\Support\Arrayable;

class Notification implements Arrayable
{
  protected $notifyBuilder;
  public function __construct(NotificationBuilder $builder)
  {
    $this->notifyBuilder = $builder;
  }

  public function toArray()
  {
    return array_filter([
      "title" => $this->notifyBuilder->getTitle(),
      "body" => $this->notifyBuilder->getBody(),
      "sound" => $this->notifyBuilder->getSound(),
      "android_channel_id" => $this->notifyBuilder->android->getChannelId(),
      "icon" => $this->notifyBuilder->getIcon(),
      "click_action" => $this->notifyBuilder->getClickAction(),
      "color" => $this->notifyBuilder->android->getColor(),
      "tag" => $this->notifyBuilder->android->getTag(),
      'body_loc_key' => $this->notifyBuilder->getBodyLockey(),
      'body_loc_args' => $this->notifyBuilder->getBodyLocArgs(),
      'title_loc_key' => $this->notifyBuilder->getTitleLockey(),
      'title_loc_args' => $this->notifyBuilder->getTitleLocArgs(),
      'subtitle' => $this->notifyBuilder->ios->getSubtitle(),
      "badge" => $this->notifyBuilder->ios->getBadge()
    ]);
  }
}
