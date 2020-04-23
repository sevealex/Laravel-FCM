<?php

namespace Prgayman\Fcm\Support\Payload\Notification\Platform;

class NotificationAndroidBuilder
{
  /**
   * Notification android channel Id 
   * 
   * @var string|null
   */
  protected $channelId;

  /**
   * Notification color 
   * 
   * @var string|null
   */
  protected $color;

  /**
   * Notification tag 
   * 
   * @var string|null
   */
  protected $tag;

  /**
   * Set Android Channel Id
   * @param string|null $channelId
   * @return NotificationAndroidBuilder
   */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
    return $this;
  }

  /**
   * Get Android Channel Id 
   * @return string|null
   */
  public function getChannelId()
  {
    return $this->channelId;
  }

  /**
   * Set Tag
   * @param string|null $tag
   * @return NotificationAndroidBuilder
   */
  public function setTag($tag)
  {
    $this->tag = $tag;
    return $this;
  }

  /**
   * Get Tag
   * @return string|null
   */
  public function getTag()
  {
    return $this->tag;
  }

  /**
   * Set Color hex color
   * @param string|null $color
   * @return NotificationAndroidBuilder
   */
  public function setColor($color)
  {
    $this->color = $color;
    return $this;
  }

  /**
   * Get Color
   * @return string|null
   */
  public function getColor()
  {
    return $this->color;
  }
}
