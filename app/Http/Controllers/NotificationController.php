<?php

namespace App\Http\Controllers;

use App\Events\DatabaseNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function send()
    {
        $data = [
            'user_id'    => Auth::id(),
            'title'      => 'test',
            'created_at' => Carbon::now()->toDateTimeString(),
        ];
        event(new DatabaseNotification($data));
    }
}
