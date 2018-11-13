<?php

namespace App\Http\Controllers;

use App\Events\DatabaseNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send()
    {
        // broadcast the event

        $data = [
            'name' => 'test',
        ];
        event(new DatabaseNotification($data));
    }
}
