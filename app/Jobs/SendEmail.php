<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\Notification\Notification;
use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;


class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user;
    private $mailable;


    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param $mailable
     */
    public function __construct(User $user,Mailable $mailable)
    {

        $this->user = $user;
        $this->mailable = $mailable;
    }

    /**
     * Execute the job.
     * @param Notification $notification
     */
    public function handle(Notification $notification)
    {
         $notification->sendEmail($this->user, $this->mailable);
        Log::info('job ran ' . Carbon::now()->toDateTimeString());
    }
}
