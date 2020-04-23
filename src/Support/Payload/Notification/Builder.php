<?php

namespace Prgayman\Fcm\Support\Payload\Notification;

class Builder
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
   * Notification Icon  Support [Android , Web]
   * 
   * @var string|null
   */
  protected $icon;

  /**
   * Notification badge support [IOS]
   * 
   * @var string|null
   */
  protected $badge;

  /**
   * Notification android channel Id support [Android]
   * 
   * @var string|null
   */
  protected $channelId;

  /**
   * Notification tag support [Android]
   * 
   * @var string|null
   */
  protected $tag;

  /**
   * Notification color support [Android]
   * 
   * @var string|null
   */
  protected $color;

  /**
   * Notification subtitle support [IOS]
   * 
   * @var string|null
   */
  protected $subtitle;

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
   * Set title
   * 
   * @param string|null $title
   * @return Builder
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
   * @return Builder
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
   * @return Builder
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
   * @return Builder
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
   * Set Badge
   * @param string|null $badge
   * @return Builder
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
   * Set Icon
   * @param string|null $icon
   * @return Builder
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
   * Set Tag
   * @param string|null $tag
   * @return Builder
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
   * Set Android Channel Id
   * @param string|null $channelId
   * @return Builder
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
   * Set Color hex color
   * @param string|null $color
   * @return Builder
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

  /**
   * Set Sub Title
   * @param string|null $subtitle
   * @return Builder
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

  /**
   * Set Body loc key
   * @param string|null $bodyLockey
   * @return Builder
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
   * @return Builder
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
   * @return Builder
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
   * @return Builder
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
   * Build Payload Notification 
   * @return  Prgayman\Fcm\Support\Payload\Notification\Notification
   */
  public function build()
  {
    return new Notification($this);
  }
}
