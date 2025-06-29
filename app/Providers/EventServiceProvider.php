<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\AuditLogEventSubscriber;

class EventServiceProvider extends ServiceProvider
{
    protected $subscribe = [
        AuditLogEventSubscriber::class,
    ];
}

