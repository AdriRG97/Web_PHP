<?php

/**
 * NOTE: Keep in mind that to make this code work you need to double check that
 * the following line is uncommented in your php.ini file:
 * extension=php_openssl.dll
 * You might need to restart your server to make it work.
 */
require_once(dirname(__FILE__) . "/../lib/class.phpmailer.php");
require_once(dirname(__FILE__) . "/../lib/class.smtp.php");

/**
 * class EmailUtils
 *
 * Contains util methods to send email messages.
 *
 * @version    0.1
 *
 * @author     Ander Frago <ander_frago@cuatrovientos.org>
 */
class EmailUtils
{

    /**
     * Sends an email using Gmail service as email server. Needs gmail credentials
     * to set it up
     * @param type $emailInfo
     * @return type
     */
    static function send($emailInfo)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPDebug = 2;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Set up username and password with valid ones from a Gmail account
        $mail->Username = "aereoforceTest@gmail.com";
        $mail->Password = "adrian123";
        $mail->SetFrom("aereoforceTest@gmail.com", "Adrian Reina");
        $mail->Subject = $emailInfo->getSubject();
        $mail->AltBody = $emailInfo->getMessage();
        $mail->MsgHTML($emailInfo->getMessage());
        $mail->AddAddress($emailInfo->getEmail());
        $mail->IsHTML(true);
        return $mail->Send();
    }


}

?>