<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'name';
  $to = 'book@vegasglance.com';
  $subject = 'Book Inquiry';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";


          if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<div>Message Sent Successfully! <a class="button" href="http://vegasglance.com/">Back to VegasGlance.com</a> <a class="button" href="http://book.vegasglance.com/">GO BACK</a> </div>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }


?>


              

