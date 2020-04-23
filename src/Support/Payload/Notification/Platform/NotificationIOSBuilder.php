<?php

namespace Prgayman\Fcm\Support\Payload\Notification\Platform;

class NotificationIOSBuilder
{

  /**
   * Notification badge 
   * 
   * @var string|null
   */
  protected $badge;

  /**
   * Notification subtitle
   * 
   * @var string|null
   */
  protected $subtitle;

  /**
   * Set Badge
   * @param string|null $badge
   * @return NotificationIOSBuilder
   */
  public function setBadge($badge)
  {
    $this->badge = $badge;
    return $this;
  }

  /**
   * Get Sound
   * @return string|null
   */
  public function getBadge()
  {
    return $this->badge;
  }

  /**
   * Set Sub Title
   * @param string|null $subtitle
   * @return NotificationIOSBuilder
   */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
    return $this;
  }

  /**
   * Get Sub Title
   * @return string|null
   */
  public function getSubtitle()
  {
    return $this->subtitle;
  }
}
