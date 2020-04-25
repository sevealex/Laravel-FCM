<?php

namespace Prgayman\Fcm\Support\Payload\Notification;

use Prgayman\Fcm\Support\Payload\Notification\Platform\NotificationAndroidBuilder;
use Prgayman\Fcm\Support\Payload\Notification\Platform\NotificationIOSBuilder;

class NotificationBuilder
{
  /**
   * Notification title 
   * @var string|null
   */
  protected $title;

  /**
   * Notification Body 
   * @var string|null 
   */
  protected $body;

  /**
   * Notification Body 
   * @var string
   */
  protected $sound = "default";

  /**
   * Notification Click Action 
   * @var string|null
   */
  protected $clickAction;

  /**
   * Notification Icon Support [Android , Web]
   * 
   * @var string|null
   */
  protected $icon;

  /**
   * Notification Body location key
   * 
   * @var string|null
   */
  protected $bodyLockey;

  /**
   * Notification Body location Args
   * 
   * @var array|null
   */
  protected $bodyLocArgs;

  /**
   * Notification Title location Key
   * 
   * @var string|null
   */
  protected $titleLocKey;

  /**
   * Notification Title location Args
   * 
   * @var array|null
   */
  protected $titleLocArgs;

  /**
   * Notification Image
   * 
   * @var string|null
   */
  protected $image;

  /**
   * Notification Ios Builder
   * 
   * @var Prgayman\Fcm\Support\Payload\Notification\Platform\NotificationIOSBuilder
   */
  public $ios;

  /**
   * Notification Android Builder
   * 
   * @var Prgayman\Fcm\Support\Payload\Notification\Platform\NotificationAndroidBuilder
   */
  public $android;

  public function __construct()
  {
    $this->ios = new NotificationIOSBuilder;
    $this->android = new NotificationAndroidBuilder;
  }

  /**
   * Set title
   * 
   * @param string|null $title
   * @return NotificationBuilder
   */
  public function setTitle($title)
  {
    $this->title = $title;
    return $this;
  }

  /**
   * Get title
   * @return null|string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set body
   * @param string|null $body
   * @return NotificationBuilder
   */
  public function setBody($body)
  {
    $this->body = $body;
    return $this;
  }

  /**
   * Get body
   * @return null|string
   */
  public function getBody()
  {
    return $this->body;
  }

  /**
   * Set Click Action
   * @param string|null $clickAction
   * @return NotificationBuilder
   */
  public function setClickAction($clickAction)
  {
    $this->clickAction = $clickAction;
    return $this;
  }

  /**
   * Get Click Action
   * @return null|string
   */
  public function getClickAction()
  {
    return $this->clickAction;
  }

  /**
   * Set Sound
   * @param string|null $sound
   * @return NotificationBuilder
   */
  public function setSound($sound)
  {
    $this->sound = $sound;
    return $this;
  }

  /**
   * Get Sound
   * @return string
   */
  public function getSound()
  {
    return $this->sound;
  }

  /**
   * Set Icon
   * @param string|null $icon
   * @return NotificationBuilder
   */
  public function setIcon($icon)
  {
    $this->icon = $icon;
    return $this;
  }

  /**
   * Get Icon
   * @return string|null
   */
  public function getIcon()
  {
    return $this->icon;
  }

  /**
   * Set Body loc key
   * @param string|null $bodyLockey
   * @return NotificationBuilder
   */
  public function setBodyLockey($bodyLockey)
  {
    $this->bodyLockey = $bodyLockey;
    return $this;
  }

  /**
   * Get Body loc key
   * @return string|null
   */
  public function getBodyLockey()
  {
    return $this->bodyLockey;
  }

  /**
   * Set Body loc Args
   * @param array|null $bodyLocArgs
   * @return NotificationBuilder
   */
  public function setBodyLocArgs($bodyLocArgs)
  {
    $this->bodyLocArgs = $bodyLocArgs;
    return $this;
  }

  /**
   * Get Body loc Args
   * @return array|null
   */
  public function getBodyLocArgs()
  {
    return $this->bodyLocArgs;
  }

  /**
   * Set Title loc key
   * @param string|null $titleLocKey
   * @return NotificationBuilder
   */
  public function setTitleLockey($titleLockey)
  {
    $this->titleLocKey = $titleLockey;
    return $this;
  }

  /**
   * Get Title loc key
   * @return string|null
   */
  public function getTitleLockey()
  {
    return $this->titleLocKey;
  }

  /**
   * Set Title loc Args
   * @param array|null $titleLocArgs
   * @return NotificationBuilder
   */
  public function setTitleLocArgs($titleLocArgs)
  {
    $this->titleLocArgs = $titleLocArgs;
    return $this;
  }

  /**
   * Get Title loc Args
   * @return array|null
   */
  public function getTitleLocArgs()
  {
    return $this->titleLocArgs;
  }


  /**
   * Set Image
   * @param string|null $image
   * @return NotificationBuilder
   */
  public function setImage($image)
  {
    $this->image = $image;
    return $this;
  }

  /**
   * Get image
   * @return array|null
   */
  public function getImage()
  {
    return $this->image;
  }


  /**
   * Build Payload Notification 
   * @return  Prgayman\Fcm\Support\Payload\Notification\Notification
   */
  public function build()
  {
    return new Notification($this);
  }
}
