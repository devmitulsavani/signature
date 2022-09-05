<?php

/* ----for mail configuration-------- */

function mail_config() {
    $configs = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => '',
        'smtp_pass' => '',
        'transport' => 'Smtp',
        'charset' => 'utf-8',
        'newline' => "\r\n",
        'headerCharset' => 'iso-8859-1',
        'mailtype' => 'html'
    );
    return $configs;
}

/**
 * send_mail_front function
 * this function is used to send email
 * @return void
 * @author 
 **/
function send_mail_front($to, $from, $subject, $body) {
    $CI = & get_instance();
    $CI->load->library('My_PHPMailer');
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 2;    
    // $mail->IsSMTP(); // we are going to use SMTP
    $mail->SMTPAuth = true; // enabled SMTP authentication
    $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
    $mail->Host = "ssl://smtp.gmail.com";      // setting GMail as our SMTP server
    $mail->Port = 465;     // SMTP port to connect to GMail
    $mail->Username = "kap.narola@gmail.com";  // user email address
    $mail->Password = "narola21";     // password in GMail
    $mail->Transport = 'Smtp';
    $mail->SetFrom($from, 'Signaturia');  //Who is sending the email
    $mail->AddReplyTo($from, "");  //email address that receives the response
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    // $mail->AddAddress('kamleshpokiya1993@gmail.com');
    if (!$mail->send()) {
        return 1;
    } else {
        return 1;
    }
}