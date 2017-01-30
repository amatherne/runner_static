<?php
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    // $from = 'From: TangledDemo'; 
    $to = 'matherne.projects@gmail.com'; 
    $subject = 'Email from Contact Form';
    $subject2 = 'We got your Message!';
    $body = "$name\n $email\n $phone\n\n\n $message\n\n\n\n";
    $body2 = "Thanks for contacting me! Here's what I got from you:\n\n\n\n\n\n $name\n $email\n $phone\n\n\n $message\n\n\n\n";
?>

<?php
if ($_POST['submit']) {
  if ($name != '' && $email != '' && $phone != '' && $message != '') {
        if (mail ($to, $subject, $body)) { 
            echo '
            <html>

              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Runner Deliveries</title>
                <meta name="description" content="Runner Deliveries">

                <link rel="stylesheet" href="/css/main.css">
              </head>
              <body class="email-sent">
                <h2>Email Successful!</h2> 
                <p>We will get back to you shortly!</p> 
                <a href="http://runnerdeliveries.com">Home</a>
              </body>
            </html>

            ';
        } else { 
            echo '<h2>OH No!</h2> <p>Something went wrong, go back and try again!</p> <a href="http://runnerdeliveries.com/contact/">Go back</a>'; 
        }
        if (mail ($email, $subject2, $body2)) { 

        } else { 
            echo '<h2>OH No!</h2> <p>Something went wrong, go back and try again!</p> <a href="http://runnerdeliveries.com/runner/contact/">Go back</a>'; 
        }
      } else {
      echo '

                  <html>

              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Runner Deliveries</title>
                <meta name="description" content="Runner Deliveries">

                <link rel="stylesheet" href="/css/main.css">
              </head>
              <body class="email-sent">
                <h2 class="error">OH No!</h2>
                <p class="error">You need to fill in all required fields!!</p>
                <a class="error" href="http://runnerdeliveries.com/contact/">Go back</a>
              </body>
            </html>
      ';
  }
}
?>