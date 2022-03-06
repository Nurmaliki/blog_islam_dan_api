<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Sendmail {
    public function __construct(){
        // log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function encryptData($param){
        $CI = &get_instance();
        $CI->load->library('encrypt');

        $json = json_encode($param);
        $encrypted = $CI->encrypt->encode($json, '123');
        $base64 = base64_encode($encrypted);
        return $base64;
    }
    public function send($param){
        
        require_once APPPATH . 'third_party/PHPMailer/src/Exception.php';
        require_once APPPATH . 'third_party/PHPMailer/src/PHPMailer.php';
        require_once APPPATH . 'third_party/PHPMailer/src/SMTP.php';

        try{
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->IsHTML(true);
    
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "officesyariaid@gmail.com";
            $mail->Password = "syaria@2021";
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            $mail->setFrom('noreply@officesyariaid.com', 'SYARIAID');
            $mail->addAddress($param['tomail']);
            $mail->addBCC('officesyariaid@gmail.com','Office');
            $mail->addBCC('mrgaban01@gmail.com', 'Gaban');
            //$mail->addBCC('dian.eryanto@nievetechnology.com', 'Dian');
            //$mail->addBCC('billy.ezra@nievetechnology.com', 'Billy');
           // $mail->addBCC('farida.frihatini@nievetechnology.com', 'Farida');
            $mail->isHTML(true);
            $mail->Subject = html_entity_decode($param['subject']);
            $mail->Body = $param['body'];
            // $mail->addAttachment($param['attachment']);
            
            if ($mail->send()) {
                $response = array('status' => 1, 'message' => 'Message has been sent to: ');
            } else {
                $response = array('status' => 0, 'message' => 'Message could not be sent, ' . $mail->ErrorInfo);
            }
        }catch (Exception $e) {
            $response = array('status' => 0, 'message' => 'Message could not be sent, ' . $e->getMessage());
        }


        return $response;
    }
   
}