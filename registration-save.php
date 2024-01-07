<?php 


// Eamil Start

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$code = rand(10,100000);
require("config.php");

  

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            //$mail->Username = 'jannat.mamurjor@gmail.com';  // sender gmail host              
            $mail->Username = 'b8400f07085db9';  // sender gmail host              
         
            //$mail->Password = 'ihztsijwheggbfmy'; // sender gmail host password   
            $mail->Password = '4f0c8cc6618f5c'; // sender gmail host password   
           
            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 2525;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('hadijaman@gmail.com', "Sender"); // sender's email and name

            $mail->addAddress($email, "HADIJAMAN");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification From Codemanbd';
          
              $mail->Body    =  $code; 

            $mail->send();

          

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }


// Mail End 


// boolien (true/false)
if($conn==true){   
    $query = "INSERT INTO user (username,email,password,code)
    VALUES ('$username','$email','$password',$code)";
    // var_dump($query);
    // exit();
    $sql=mysqli_query($conn,$query);

    if($sql){
       header("location: userconfirm.php");
    }
    else{
        header("location: registration.php?msg=entry hoi nai");
    }
}
else{
    echo "Sorry";
}

?>