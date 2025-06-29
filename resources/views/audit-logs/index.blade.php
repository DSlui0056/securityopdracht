@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Audit Logs</h1>
    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Date</th>
                <th class="px-4 py-2 border">User</th>
                <th class="px-4 py-2 border">Action</th>
                <th class="px-4 py-2 border">IP Address</th>
                <th class="px-4 py-2 border">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td class="px-4 py-2 border">{{ $log->created_at }}</td>
                    <td class="px-4 py-2 border">{{ $log->user ? $log->user->name : 'N/A' }}</td>
                    <td class="px-4 py-2 border">{{ $log->action }}</td>
                    <td class="px-4 py-2 border">{{ $log->ip_address }}</td>
                    <td class="px-4 py-2 border">{{ $log->details }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $logs->links() }}
    </div>
</div>
@endsection

