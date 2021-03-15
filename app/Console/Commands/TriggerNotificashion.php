<?php

namespace App\Console\Commands;

use App\Http\Controllers\NotificationController;
use App\Notification;
use Pusher\Pusher;
use Illuminate\Console\Command;

class TriggerNotificashion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trigger:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $body = "You have new funding!";
        $notificatoinController = new NotificationController();
        $notificatoinController->insert($body);
    }
}
