<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // inserts a new notificatoin into the database
    public function insert($body){
        Notification::create(
            [   
                'user_id' => 1,
                'body' => $body
            ] 
        );

        $this->push($body);
    }
    // push a nontification to the webhook
    public function push($body){
        $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), array('cluster' => env('PUSHER_APP_CLUSTER')));
        $pusher->trigger('my-channel', 'my_event', $body);
    }
}
