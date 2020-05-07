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

    protected $fillable = ["platform", "model_type", "model_id", "locale", "token"];

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

    /**
     * Create Or Update Token
     * @param string $token
     * @param Illuminate\Database\Eloquent\Model $model_type
     * @param int $model_id
     * @param string $platform
     * @param string $locale
     * 
     * @return Prgayman\Fcm\Models\FcmToken
     */
    public static function createOrUpdate($token, $model_type = null, $model_id = null, $platform = null, $locale = null)
    {
        $fcmToken = static::where("token", $token)->where(function ($query) use ($model_type) {
            if ($model_type) {
                $query->where("model_type", $model_type);
            }
        })->first();
        if (!$fcmToken) {
            $fcmToken = new static;
            $fcmToken->token = $token;
        }
        $fcmToken->model_type = $model_type;
        $fcmToken->model_id = $model_id;
        $fcmToken->platform = $platform;
        $fcmToken->locale = $locale;
        $fcmToken->save();
        return $fcmToken;
    }
}
