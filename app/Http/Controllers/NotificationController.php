<?php

namespace App\Http\Controllers;

use App\Events\DatabaseNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function send()
    {
        // broadcast the event

        $data = [
            'user_id' => Auth::id(),
            'name' => 'test',
        ];
        event(new DatabaseNotification($data));
    }
}
