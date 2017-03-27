<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <?php
      function console_log($data) {
        echo '<script> console.log(' . json_encode($data) . '); </script>';
      }
    ?>
  </head>
  <body>
    <header id="page-header">
      <h1>Welcome</h1>
    </header>

    <?php
      console_log($_COOKIE);
      $logged_in = TRUE;
      $vars = array('firstName', 'lastName', 'email');
      # There has to be an all() function that does this more simply
      foreach ($vars as &$var) {
        if (!isset($_COOKIE[$var])) {
          $logged_in = FALSE;
        }
      }
      if (!$logged_in) {
        echo "<p>Please register.</p>";
        readfile("form.html");
      }
      else {
        echo "<p>Hi, " . $_COOKIE['firstName'] . ", you recently signed up";
        echo " with the email address: " . $_COOKIE['email'] . "</p>";
      }
    ?>
  </body>
</html>
