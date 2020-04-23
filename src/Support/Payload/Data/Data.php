<?php

namespace Prgayman\Fcm\Support\Payload\Data;

use Illuminate\Contracts\Support\Arrayable;

class Data implements Arrayable
{
  protected $dataBuilder;

  public function __construct(Builder $builder)
  {
    $this->dataBuilder = $builder;
  }

  public function toArray()
  {
    return $this->dataBuilder->getDate();
  }
}
