<?php

namespace App\Http\Controllers;

use App\Events\DatabaseNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function send()
    {
        // broadcast the event

        $data = [
            'user_id' => Auth::id(),
            'title' => 'test',
            'created_at' => Carbon::now(),
        ];
        event(new DatabaseNotification($data));
    }
}
