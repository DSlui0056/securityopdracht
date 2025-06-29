<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\PasswordReset;
use App\Services\AuditLogService;

class AuditLogEventSubscriber
{
    public function handleLogin(Login $event)
    {
        AuditLogService::log('login', null, $event->user->id);
    }

    public function handleLogout(Logout $event)
    {
        AuditLogService::log('logout', null, $event->user->id);
    }

    public function handlePasswordReset(PasswordReset $event)
    {
        AuditLogService::log('password_reset', null, $event->user->id);
    }

    public function subscribe($events)
    {
        $events->listen(Login::class, [self::class, 'handleLogin']);
        $events->listen(Logout::class, [self::class, 'handleLogout']);
        $events->listen(PasswordReset::class, [self::class, 'handlePasswordReset']);
    }
}

