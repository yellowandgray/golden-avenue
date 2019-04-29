<?php

require_once('PHPMailer/class.phpmailer.php');
$res = array('error' => true, 'message' => 'Unable to submit your form');
$data = $_POST['data'];
$body = '<table><tbody><tr><td colspan="2">Dear Admin, <br/><br/>New form submitted following are the details.</td></tr>';
foreach ($data as $val) {
    $body = $body . '<tr><td>' . $val['label'] . '</td><td>' . $val['value'] . '</td></tr>';
}
$body = $body . '</tbody></table>';
$mail = new PHPMailer();
$mail->From = 'gagtdxb@gmail.com';
$mail->FromName = 'Golden Avenue';
$mail->AddReplyTo('gagtdxb@gmail.com', 'Golden Avenue');
$mail->Subject = 'Form Submission';
$mail->Body = $body;
$mail->AltBody = $body;
$mail->AddAddress('gagtdxb@gmail.com', 'Golden Avenue');
//$mail->AddAddress('mushaqdeen@gmail.com', 'Golden Avenue');
if ($mail->Send()) {
    $res = array('error' => false, 'message' => 'Form submitted successfully');
}
response_json($res);

function response_json($res) {
    header('Content-Type: application/json');
    //header("Content-encoding", "deflate");
    ob_start("ob_gzhandler");
    echo json_encode($res);
    ob_end_flush();
    die();
}
