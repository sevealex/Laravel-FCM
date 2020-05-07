<?php

namespace Prgayman\Fcm;

use Illuminate\Support\ServiceProvider;

class FcmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('prgayman.fcm', function () {
            return new Fcm();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->fcmPublishes();
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    public function fcmPublishes()
    {
        $publishes = [
            "config" =>         [
                __DIR__ . '/Config/fcm.php' => config_path('fcm.php')
            ],
        ];
        foreach ($publishes as $group => $publishe) {
            $this->publishes($publishe, $group);
        }
    }
}
