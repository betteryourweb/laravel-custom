<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 5/28/15
 * Time: 9:31 AM
 */

namespace Betteryourweb\Common;

class UserMailer extends EmailService
{
    public function verification($user, $data){
        $this->sendTo($user, "Verification Email","emails.auth.verification",$data);
    }
}