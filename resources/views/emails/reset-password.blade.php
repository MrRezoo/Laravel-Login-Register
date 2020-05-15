@component('mail::message')
#Forget Password

The body of your message.

@component('mail::button', ['url' => $link])
Reset your password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
