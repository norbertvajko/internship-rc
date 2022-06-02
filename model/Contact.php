<?php

require_once '../system/Model.php';

class Model_Contact extends Model {

    public $string;

    public function __construct() {
        $this->string = 'Contact';
    }

    public static function emailTemplate($name,$subject,$message,$from) {
        $result = 'Name: ' . $name . '<br>' .
            'Subject: ' . $subject .'<br>' .
            'Message: ' . $message . '<br>' .
            'From: ' . $from ;
        return $result;
    }

    public function sendEmail($to, $subject, $message, $from)
    {
        $header = "From: ".$from." \r\n";
        $header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $header);
    }

    public function checkErrors($name,$subject,$message,$email) {

        $formComplete = true;

        $response = [
            'success' => '',
            'name_error' => '',
            'subject_error' => '',
            'email_error' => '',
            'message_error' => ''
        ];

        if (empty($name)) {
            $response['name_error'] = 'Name is Required';
            $formComplete = false;
        }elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $response['name_error']  = 'Only Letters and White Space Allowed';
            $formComplete = false;
        }
        if (empty($subject)) {
            $response['subject_error'] = 'Subject required';
            $formComplete = false;
        }
        if (empty($email)) {
            $response['email_error'] = 'Email is Required';
            $formComplete = false;
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['email_error'] = 'eMail is invalid';
            $formComplete = false;
        }

        if (empty($message)) {
            $response['message_error'] = 'Message required';
            $formComplete = false;
        }


        if ($formComplete) {
            $response['success'] = 'Message Sent';
        }

        echo json_encode($response);
    }

}