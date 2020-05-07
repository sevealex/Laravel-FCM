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
   * @param string $locale
   * 
   * @return array
   */
  public function getFcmTokens($locale = null)
  {
    return $this->fcmTokens->where(function ($query) use ($locale) {
      if ($locale) {
        $query->where("locale", $locale);
      }
    })->pluck("token")->toArray();
  }

  /**
   * Get All Ios tokens user
   * @param string $locale
   * 
   * @return array
   */
  public function getFcmIosTokens($locale = null)
  {
    return $this->fcmTokens->where(function ($query) use ($locale) {
      if ($locale) {
        $query->where("locale", $locale);
      }
    })->where("platform", FcmToken::PLATFORM_IOS)->pluck("token")->toArray();
  }

  /**
   * Get All Android tokens user
   * @param string $locale
   * 
   * @return array
   */
  public function getFcmAndroidTokens($locale = null)
  {
    return $this->fcmTokens->where(function ($query) use ($locale) {
      if ($locale) {
        $query->where("locale", $locale);
      }
    })->where("platform", FcmToken::PLATFORM_ANDROID)->pluck("token")->toArray();
  }

  /**
   * Get All Ios Web user
   * @param string $locale
   * 
   * @return array
   */
  public function getFcmWebTokens($locale = null)
  {
    return $this->fcmTokens->where(function ($query) use ($locale) {
      if ($locale) {
        $query->where("locale", $locale);
      }
    })->where("platform", FcmToken::PLATFORM_WEB)->pluck("token")->toArray();
  }

  public function fcmCreateOrUpdate($token, $platform = null, $locale = null)
  {
    $fcmToken = FcmToken::where("token", $token)->first();
    if (!$fcmToken) {
      $fcmToken = new FcmToken;
      $fcmToken->token = $token;
    }
    $fcmToken->model_type = get_class($this);
    $fcmToken->model_id = $this->id;
    $fcmToken->platform = $platform;
    $fcmToken->locale = $locale;
    $fcmToken->save();
    return $fcmToken;
  }
}
