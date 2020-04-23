<?php

namespace Prgayman\Fcm\Support\Payload\Options;

use Exception;

class Builder
{
  /**
   * Collapse Key
   * @var string|null
   */
  protected $collapseKey;

  /**
   * Priority
   * @var string [normal|high]
   */
  protected $priority = "normal";

  /**
   * Content Available
   * @var boolean
   */
  protected $contentAvailable = false;

  /**
   * Mutable Content
   * @var boolean
   */
  protected $mutableContent = false;

  /**
   * Mutable Content
   * @var int
   */
  protected $timeToLive;

  /**
   * Restricted Package Name
   * @var string|null
   */
  protected $restrictedPackageName;

  /**
   * Dry Run
   * @var boolean
   */
  protected $dryRun = false;

  /**
   * Set collapseKey
   * @param string|null $collapseKey
   * @return Builder
   */
  public function setCollapseKey($collapseKey)
  {
    $this->collapseKey = $collapseKey;
    return $this;
  }

  /**
   * Get Collapse Key
   * @return null|string
   */
  public function getCollapseKey()
  {
    return $this->collapseKey;
  }

  /**
   * Set Priority
   * @param string $priority
   * @return Builder
   */
  public function setPriority($priority)
  {
    if (!in_array($priority, ["normal", "high"])) {
      throw new Exception("In valid priority ($priority) supported priority [normal|high]");
    }
    $this->priority = $priority;
    return $this;
  }

  /**
   * Get Priority
   * @return string
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * Set Content Available
   * @param bool $contentAvailable
   * @return Builder
   */
  public function setContentAvailable($contentAvailable)
  {
    $this->contentAvailable = $contentAvailable ? true : false;
    return $this;
  }

  /**
   * Get Content Available
   * @return bool
   */
  public function getContentAvailable()
  {
    return $this->contentAvailable;
  }

  /**
   * Set Mutable Content
   * @param bool $mutableContent
   * @return Builder
   */
  public function setMutableContent($mutableContent)
  {
    $this->mutableContent = $mutableContent ? true : false;
    return $this;
  }

  /**
   * Get Mutable Content
   * @return bool
   */
  public function getMutableContent()
  {
    return $this->mutableContent;
  }

  /**
   * Set Time To Live
   * @param int $timeToLive
   * @return Builder
   */
  public function setTimeToLive($timeToLive)
  {
    if ($timeToLive < 0 || $timeToLive > 2419200) {
      throw new Exception("time to live must be between 0 and 2419200, current value is: {$timeToLive}");
    }

    $this->timeToLive =  $timeToLive;
    return $this;
  }

  /**
   * Get Time To Live
   * @return int
   */
  public function getTimeToLive()
  {
    return $this->timeToLive;
  }

  /**
   * Set Restricted Package Name
   * @param int $restrictedPackageName
   * @return Builder
   */
  public function setRestrictedPackageName($restrictedPackageName)
  {
    $this->restrictedPackageName =  $restrictedPackageName;
    return $this;
  }

  /**
   * Get Restricted Package Name
   * @return string
   */
  public function getRestrictedPackageName()
  {
    return $this->restrictedPackageName;
  }

  /**
   * Set Dry Run
   * @param bool $dryRun
   * @return Builder
   */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun ? true : false;
    return $this;
  }

  /**
   * Get Dry Run
   * @return bool
   */
  public function getDryRun()
  {
    return $this->dryRun;
  }

  /**
   * Build Payload Options 
   * @return  Prgayman\Fcm\Support\Payload\Options\Options
   */
  public function build()
  {
    return new Options($this);
  }
}
