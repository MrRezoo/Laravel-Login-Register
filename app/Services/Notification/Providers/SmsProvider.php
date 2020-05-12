<?php


namespace App\Services\Notification\Providers;


use App\Services\Notification\Exceptions\UserDoesNotHaveNumber;
use App\Services\Notification\Providers\Contracts\Provider;
use App\User;
use GuzzleHttp\Client;


class SmsProvider implements Provider
{

    //this SmsSystem is RayganSms.com you can buy and try it or Test For Free :)
    //You can use Trez_RayganSms's Laravel package (GitHub) OR use Mr.Rezoo's Code


    /**
     * Sms constructor.
     * @param User $user
     * @param String $text
     */
    public function __construct(User $user, String $text)
    {
        $this->user = $user;
        $this->text = $text;
    }

    /** @var Client */
    protected $client;

    /** @var string */
    protected $url_send_message;

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface|void
     * @throws UserDoesNotHaveNumber
     */
    public function send()
    {


        $client = new Client();
        //        HttpClient([ 'timeout'=> 10,'connect_timeout' => 10,]);
        $url_send_message = 'https://RayganSMS.com/SendMessageWithPost.ashx';

        $response = $client->post($url_send_message, $this->prepareDataForSms());
        $response = json_decode((string)$response->getBody()->getContents(), true);

        return $response;
    }

    /** @var string */
    protected $text;

    /** @var User */
    protected $user;

    /**
     * @return array
     * @throws UserDoesNotHaveNumber
     */
    private function prepareDataForSms()
    {
        $this->havePhoneNumber();
        $user_name = config('services.raygansms.user_name');
        $password = config('services.raygansms.password');
        $send_phone_number = config('services.raygansms.phone_number_sender');

        $params = [
            'UserName' => $user_name,
            'Password' => $password,
            'PhoneNumber' => $send_phone_number,
            'Smsclass' => '1',
            'RecNumber' => $this->user->phone_number,
            'MessageBody' => $this->text,
        ];

        return ['form_params' => $params];

    }

    /**
     * @throws UserDoesNotHaveNumber
     */
    private function havePhoneNumber()
    {
        if (is_null($this->user->phone_number)) {
            throw new UserDoesNotHaveNumber();
        }

    }



//this SMS System is Sich you can buy and try it or Test For Free :)

//    public function send(User $user, String $text)
//    {
//
//        $client = new Client();
//
//        $response = $client->post(config('services.sinchsms.url'), $this->prepareDataForSms($user, $text))->getBody()->getContents();
//        return dd(json_decode($response));
//
//    }
//
//
//    private function prepareDataForSms(User $user, String $text)
//    {
//        $headers = [
//            'Authorization' => config('services.sinchsms.Authorization'),
//            'Content-Type' => "application/json",
//            "Accept" => "application/json",
//        ];
//
//        $url = config('services.sinchsms.url');
//        $param = [
//            "type" => "mt_text",
//            "to" => [$user->phone_number],
//            "body" => "Testiii",
//        ];
//
//        return [
//            'headers' => $headers,
//            'json' => $param
//        ];
//    }


}
