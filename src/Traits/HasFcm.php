<?php

namespace Prgayman\Fcm\Traits;

use Prgayman\Fcm\Models\FcmToken;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasFcm
{

  public function fcmTokens(): MorphMany
  {
    return $this->morphMany(FcmToken::class, "model");
  }

  /**
   * Get All tokens user
   * @return array
   */
  public function getFcmTokens()
  {
    return $this->fcmTokens->pluck("token")->toArray();
  }

  /**
   * Get All Ios tokens user
   * @return array
   */
  public function getFcmIosTokens()
  {
    return $this->fcmTokens->where("platform", FcmToken::PLATFORM_IOS)->pluck("token")->toArray();
  }

  /**
   * Get All Android tokens user
   * @return array
   */
  public function getFcmAndroidTokens()
  {
    return $this->fcmTokens->where("platform", FcmToken::PLATFORM_ANDROID)->pluck("token")->toArray();
  }

  /**
   * Get All Ios Web user
   * @return array
   */
  public function getFcmWebTokens()
  {
    return $this->fcmTokens->where("platform", FcmToken::PLATFORM_WEB)->pluck("token")->toArray();
  }
}
