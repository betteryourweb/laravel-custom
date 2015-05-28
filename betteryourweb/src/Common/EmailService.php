<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 5/28/15
 * Time: 8:52 AM
 */

namespace Betteryourweb\Common;

class EmailService
{
    public $mail;


    public function sendTo($user, $subject, $view, $data){
        \Mail::queue($view, $data, function ($message) use ($user, $subject){
            $message->to($user->email)
                ->subject($subject);
        });
    }
}