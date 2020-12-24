 <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "forms/PHPMailer/PHPMailer.php";
        require_once "forms/PHPMailer/SMTP.php";
        require_once "forms/PHPMailer/Exception.php";

        $mail = new PHPMailer(true);

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "infopedia.org4@gmail.com"; //enter you email address
        $mail->Password = 'Pescollege@4'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $email);
        // $mail->From = $email;
        // $mail->FromName = $email;
        
        // $temp =$mail->setFrom($email, $name);
        $mail->addAddress("infopedia.org4@gmail.com"); //enter you email address
        $mail->addReplyTo($email);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
