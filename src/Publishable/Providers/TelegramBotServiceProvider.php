<?php

namespace TelegramBot\Publishable\Providers;

use Illuminate\Support\ServiceProvider;

class TelegramBotServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConfig();
    }

    public function boot()
    {
    }

    private function registerConfig()
    {
        $ds = DIRECTORY_SEPARATOR;
        $configFile = __DIR__ . $ds . '..' . $ds .'config' . $ds .'tg-bot.php';

        $this->publishes([
            $configFile => config_path('tg-bot.php')
        ]);
    }
}