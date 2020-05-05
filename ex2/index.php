<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $myMail = $_GET['email'];
      if(strpos( $myMail, "." ) !== false && strpos($myMail, "@") !== false) {
        echo "ok";
      } else {
        echo "ko";
      }

     ?>
  </body>
</html>
