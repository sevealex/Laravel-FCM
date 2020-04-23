<?php

namespace Prgayman\Fcm\Support\Payload\Options;

use Illuminate\Contracts\Support\Arrayable;

class Options implements Arrayable
{

  protected $optionsBuilder;

  public function __construct(OptionsBuilder $builder)
  {
    $this->optionsBuilder = $builder;
  }

  public function toArray()
  {
    return array_filter([
      "collapse_key" => $this->optionsBuilder->getCollapseKey(),
      "priority" => $this->optionsBuilder->getPriority(),
      "content_available" => $this->optionsBuilder->getContentAvailable(),
      "mutable_content" => $this->optionsBuilder->getMutableContent(),
      "time_to_live" => $this->optionsBuilder->getTimeToLive(),
      "restricted_package_name" => $this->optionsBuilder->getRestrictedPackageName(),
      "dry_run" => $this->optionsBuilder->getDryRun(),
    ]);
  }
}
