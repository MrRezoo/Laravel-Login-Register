<?php


namespace App\Services\Notification\Providers;


use App\Services\Notification\Providers\Contracts\Provider;;
use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class EmailProvider implements Provider
{

    private $user;
    private $mailable;

    /**
     * EmailProvider constructor.
     * @param User $user
     * @param Mailable $mailable
     */
    public function __construct(User $user, Mailable $mailable)
    {
        $this->user = $user;
        $this->mailable = $mailable;
    }

    /**
     * @return mixed
     */
    public function send()
    {
        return Mail::to($this->user)->send($this->mailable);
    }

}
