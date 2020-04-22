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
     * Get Platform Ios Tokens
     * @return array
     */
    public function getIosTokens()
    {
        return static::where("platform", self::PLATFORM_IOS)->pluck("token")->toArray();
    }

    /**
     * Get Platform Android Tokens
     * @return array
     */
    public function getAndroidTokens()
    {
        return static::where("platform", self::PLATFORM_ANDROID)->pluck("token")->toArray();
    }

    /**
     * Get Platform Web Tokens
     * @return array
     */
    public function getWebTokens()
    {
        return static::where("platform", self::PLATFORM_WEB)->pluck("token")->toArray();
    }
}
