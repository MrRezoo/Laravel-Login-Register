<?php

namespace App\Services\Notification;
use App\Services\Notification\Providers\Contracts\Provider;

/**
 * Class Notification
 * @method sendSms(\App\User $user,String $text)
 * @method sendEmail(\App\User $user,\Illuminate\Mail\Mailable $mailable)
 * @package App\Services\Notification
 */
class Notification
{
    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws \Exception
     */
    public function __call($method, $arguments)
    {
        // TODO: Implement __call() method.

        $providerPath = __NAMESPACE__ . '\Providers\\' . substr($method, 4) . 'Provider';

        if (!class_exists($providerPath)) {
            throw new \Exception('Class does not exist :)');
        }
        $providerInstance = new $providerPath(...$arguments);
        if (!is_subclass_of($providerInstance, Provider::class)) {
            throw new \Exception("class must implements \App\Services\Notification\Providers\Contracts\Provider");
        }
        return $providerInstance->send();
    }


}
