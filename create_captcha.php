<?php
session_start();
?>
<html>
<head>
    <title>Simple Captcha Script in PHP</title>
</head>
  <body>
    <form action="check_captcha.php" method="post" >
    <div>
      <?php
      $captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
      $captcha = substr(str_shuffle($captcha_num), 0, 6);
      $_SESSION['code'] = $captcha;
      echo "Enter this Captcha : ".$_SESSION['code'];
      ?>
    </div>
    <div>
      <label> Captcha </label>
      <input type="text" name="captcha" />
    </div>
    <div>
      <input type="submit" name = "submit"/>
      </div>
    </form>
  </body>
</html>

