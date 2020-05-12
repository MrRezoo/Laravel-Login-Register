<?php


namespace App\Services\Notification\Constants;


use App\Mail\ForgetPassword;
use App\Mail\TestMail;
use App\Mail\UserRegister;
use http\Exception\InvalidArgumentException;

/**
 * Class EmailTypes
 * @package App\Services\Notification\Constants
 */
class EmailTypes
{
    const USER_REGISTERED = 1;
    const TEST_MAIL = 2;
    const FORGET_PASSWORD = 3;

    /**
     * @return array
     */
    public static function toString()
    {

        return [
            self::USER_REGISTERED => 'ثبت نام کاربر',
            self::TEST_MAIL => 'ایجاد مقاله‌ی جدید‌',
            self::FORGET_PASSWORD => 'فراموشی رمز عبور'


        ];

    }

    /**
     * @param $type
     * @return mixed
     */
    public static function toMail($type)
    {
        try {
            return [
                self::USER_REGISTERED => UserRegister::class,
                self::TEST_MAIL => TestMail::class,
                self::FORGET_PASSWORD => ForgetPassword::class,
            ][$type];
        } catch (\Throwable $throwable) {
            throw new \InvalidArgumentException('mailable class does not exist');
        }

        //return $types[$type]

    }
}
