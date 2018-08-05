<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
     
      require_once('PHPMailer-master/PHPMailerAutoload.php');

      include './connection.php';
      
      global $mail;
      
       $email=$_POST['email'];
      
     $sql="select * from persons where Email='".$email."'";
     
     $result=  mysqli_query($con, $sql);
     
     
     if(mysqli_num_rows($result)>0){
         
         if ($row = mysqli_fetch_assoc($result)) 
                {
          
          
             
             //MAIL
             
             
             $mail = new PHPMailer;

//Enable SMTP debugging. 
//$mail->SMTPDebug = 2;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "lakshmisavithri.m@gmail.com";                 
$mail->Password = "mnzjkotnrwiriiqi";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl"; //"tls";                           
//Set TCP port to connect to 
$mail->Port = 465; //587;                                   

$mail->From = "lakshmisavithri.m@gmail.com";
$mail->FromName = "ADMIN";

//$mail->addAddress("lakshmisavithri.m@gmail.com", "savi");
//$mail->addAddress("vinnu81993@gmail.com", "savi");
$mail->addAddress($email, "savi");

$mail->isHTML(true);

$mail->Subject = "Password";
$mail->Body = "Hello Your Password is: <h3>".$pass."</h3>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Password has been sent successfully<br/><br/>";
}
             
             
             
             
             //echo 'password is '.$pass;
             
             
             
             
                }
     }
      
?>
        <a href="index.php">back</a>
    </body>
</html>