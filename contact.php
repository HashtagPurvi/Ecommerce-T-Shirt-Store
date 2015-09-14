<?php 
    $pageTitle = "Contact Us";
    $section = "contact";
    include('inc/header.php'); 
    require_once('inc/PHPMailer/class.phpmailer.php');
?>

<div class="section page">

	<div class="wrapper">

        <h1>Contact Us</h1>

        <?php 

            if(isset($_GET["status"]) and $_GET["status"]=="thanks"){
        ?>
          <h1>Thank You for contacting us. We will definitely get in toch with u in a day or two !</h1>
        
        <?php 
            }
            else
            {
        ?>

        <p>We would love to hear from u</p>
        
        <form method="post" action="">
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <th><label for="email">email</label></th>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <th><label for="msg">Message</label></th>
                    <td><textarea name="msg" id="msg"></textarea></td>
                </tr>
                 <tr style="display: none;">
                    <th><label for="address">Address</label></th>
                    <td><input type="text" name="address" id="address"> <p>Not a required field. Leave blank !!</p></td>

                </tr>
            </table>
            <input type="submit" value="Submit" >
        </form>
        
        <?php } ?>
    </div>

</div>

<?php include('inc/footer.php') ?>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //echo "Got it !!";
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = trim($_POST['msg']);

        $mail = new PHPMailer();

        if(!$mail->ValidateAddress($email)){
            echo "Please enter a valid email id";
            exit();
        }

        if($name=="" || $email=="" || $msg=="")
            {
                echo "Empty Fields";
                exit();
            }

        foreach ($_POST as $value) {
            
            if(stripos($value, 'Content-Type:')!== FALSE)
                exit();
        }
        if($_POST["address"]!="")
        {
            echo "Theres is an error";
            exit();
        }

        $emailBody = "Name: ".$name."\n"."email: ".$email."\n"."Message: ".$msg;

        // Send Email

        // $mail->IsSMTP(); // telling the class to use SMTP
        // $mail->Host          = "smtp1.site.com;smtp2.site.com";
        // $mail->SMTPAuth      = true;                  // enable SMTP authentication
        // $mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
        // $mail->Host          = "mail.yourdomain.com"; // sets the SMTP server
        // $mail->Port          = 26;                    // set the SMTP port for the GMAIL server
        // $mail->Username      = "yourname@yourdomain"; // SMTP account username
        // $mail->Password      = "yourpassword";        // SMTP account password
        
        $mail->SetFrom($email, $name);
        $mail->Subject       = "Pulpypapaya Contact Form Submission".$name;
        $mail->MsgHTML($emailBody);

        if(!$mail->Send()) {
            echo "Mailer Error". $mail->ErrorInfo . '<br />';
            exit();
          } else {
            echo "Message sent to :".$name.'<br />';
          }
          // Clear all addresses and attachments for next loop
          $mail->ClearAddresses();
          $mail->ClearAttachments();
        

        header("Location: contact.php?status=thanks");
        exit;
    }
?>
