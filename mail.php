<?php 

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
      $secret = '6LcA9b0UAAAAAJ6nLzeHmUQ5nhhzdOtDxlmcooYj';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success)
      {
        
          $to = "pro@ysavary.fr"; // this is your Email address
          $from = $_POST['email']; // this is the sender's Email address
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $phone = $_POST['tel'];
          $subject = "Nouveau message de " .$first_name." depuis le site.";
        //  $subject2 = "Copie de votre mail sur le site ysavary.fr";
          $message = "Nouveau message de: ". $first_name . " " . $last_name ." \n Son numero de tel: " . $phone . "\nBody Message:" . "\n\n" . $_POST['message'];
       //   $message2 = "Bonjour, j'ai bien reçu votre message. \nJe vous répond très bientôt. \nLa copie de votre message:\n" . $_POST['message'];
      
          $headers = "From:" . $from;
         // $headers2 = "From:" . $to;
          mail($to,$subject,$message,$headers);
        //  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
          echo 'OK';
          
      }
      else
      {
          $errMsg = 'Robot verification failed, please try again.';
      }
 }

?>