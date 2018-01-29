<?php

namespace OEApp;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Deployment
{
    public static function postInstall(Event $event)
    {
        if (getenv('ENVIRONMENT') === 'heroku') {
          echo shell_exec('php artisan migrate:fresh --seed --force');
        }
    }
}
