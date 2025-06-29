<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuditLog;
use Illuminate\Support\Facades\Gate;

class AuditLogController extends Controller
{
    public function index()
    {
        // Only allow admins
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        $logs = AuditLog::with('user')->latest()->paginate(30);
        return view('audit-logs.index', compact('logs'));
    }
}

