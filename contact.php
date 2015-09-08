<?php 
    $pageTitle = "Contact Us";
    $section = "contact";
    include('inc/header.php'); 
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
        echo "Got it !!";
        //var_dump($_POST);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $emailBody = "Name: ".$name."\n"."email: ".$email."\n"."Message: ".$msg;

        //var_dump($emailBody);

        // Send Email

        header("Location: contact.php?status=thanks");
        exit;
    }
?>
