<?php

namespace Prgayman\Fcm\Facades;

use Illuminate\Support\Facades\Facade;

class Fcm extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'prgayman.fcm';
  }
}
