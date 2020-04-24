<?php

namespace Prgayman\Fcm\Models;

use Illuminate\Database\Eloquent\Model;

class FcmToken extends Model
{
    /**
     * Supported Platforms
     */
    const PLATFORM_IOS = "ios";
    const PLATFORM_ANDROID = "android";
    const PLATFORM_WEB = "web";


    /**
     * Get Tokens
     * @param string $locale
     * 
     * @return array
     */
    public function getTokens($locale = null)
    {
        return static::where(function ($query) use ($locale) {
            if ($locale) {
                $query->where("locale", $locale);
            }
        })->pluck("token")->toArray();
    }

    /**
     * Get Platform Ios Tokens
     * @param string $locale
     * 
     * @return array
     */
    public function getIosTokens($locale = null)
    {
        return static::where(function ($query) use ($locale) {
            if ($locale) {
                $query->where("locale", $locale);
            }
        })->where("platform", self::PLATFORM_IOS)->pluck("token")->toArray();
    }

    /**
     * Get Platform Android Tokens
     * @param string $locale
     * 
     * @return array
     */
    public function getAndroidTokens($locale = null)
    {
        return static::where(function ($query) use ($locale) {
            if ($locale) {
                $query->where("locale", $locale);
            }
        })->where("platform", self::PLATFORM_ANDROID)->pluck("token")->toArray();
    }

    /**
     * Get Platform Web Tokens
     * @param string $locale
     * 
     * @return array
     */
    public function getWebTokens($locale = null)
    {
        return static::where(function ($query) use ($locale) {
            if ($locale) {
                $query->where("locale", $locale);
            }
        })->where("platform", self::PLATFORM_WEB)->pluck("token")->toArray();
    }
}
