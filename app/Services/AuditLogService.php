<?php

namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuditLogService
{
    public static function log($action, $details = null, $userId = null)
    {
        AuditLog::create([
            'user_id' => $userId ?? (Auth::check() ? Auth::id() : null),
            'action' => $action,
            'ip_address' => Request::ip(),
            'details' => $details,
        ]);
    }
}

