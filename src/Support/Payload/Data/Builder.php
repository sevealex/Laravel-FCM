<?php

namespace Prgayman\Fcm\Support\Payload\Data;

class Builder
{
  /**
   * @var array
   */
  protected $data;


  /**
   * add data to existing data.
   * @param array $data
   * @return Builder
   */
  public function addData(array $data)
  {
    $this->data = $this->data ?? [];

    $this->data = array_merge($data, $this->data);

    return $this;
  }

  /**
   * erase data with new data.
   *
   * @param array $data
   * @return Builder
   */
  public function setData(array $data)
  {
    $this->data = $data;
    return $this;
  }

  /**
   * Remove all data.
   */
  public function removeAllData()
  {
    $this->data = null;
  }

  /**
   * return data.
   *
   * @return array
   */
  public function getDate()
  {
    return $this->data ?? [];
  }

  /**
   * Build Payload Data 
   * @return  Prgayman\Fcm\Support\Payload\Data\Data
   */
  public function build()
  {
    return new Data($this);
  }
}
